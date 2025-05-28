<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\Newsletter;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Mail\NewsletterVerification;
use App\Mail\NewsletterPublished;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    // Admin: View all newsletters with pagination
    public function index()
    {
        Log::info('Admin accessed the newsletter index page.');
        $newsletters = Newsletter::paginate(10);
        return view('admin.viewnewsletter', compact('newsletters'));
    }

    // Admin: Show create newsletter form
    public function create()
    {
        Log::info('Admin accessed the create newsletter page.');
        $newsletter = new Newsletter();
        $newsletter->display_on_website = 0;
        return view('admin.createnewsletter', compact('newsletter'));
    }

    // Admin: Store a new newsletter
    public function store(Request $request)
    {
        Log::info('Admin creating a new newsletter.');
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'required|mimes:pdf|max:10000',
            'display_on_website' => 'required|boolean',
        ]);

        try {
            $imagePath = $request->file('image')->store('newsletters/images', 'public');
            $pdfPath = $request->file('pdf')->store('newsletters/pdfs', 'public');

            $newsletter = Newsletter::create([
                'title' => $request->input('title'),
                'image' => $imagePath,
                'pdf' => $pdfPath,
                'display_on_website' => $request->input('display_on_website', false),
            ]);

            Log::info('Newsletter created successfully.', ['newsletter_id' => $newsletter->id]);

            if (!$newsletter->display_on_website) {
                $this->sendNewsletterToSubscribers($newsletter);
            }

            return redirect()->route('admin.viewnewsletter')->with('success', 'Newsletter created successfully!');
        } catch (\Exception $e) {
            Log::error('Newsletter creation failed: ' . $e->getMessage());
            return back()->with('error', 'Failed to create newsletter. Please try again.');
        }
    }

    // Admin: Show edit newsletter form
    public function edit($id)
    {
        Log::info('Admin accessed the edit newsletter page.', ['newsletter_id' => $id]);
        $newsletter = Newsletter::findOrFail($id);
        return view('admin.editnewsletter', compact('newsletter'));
    }

    // Admin: Update a newsletter
    public function update(Request $request, $id)
    {
        Log::info('Admin updating a newsletter.', ['newsletter_id' => $id]);
        $newsletter = Newsletter::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pdf' => 'nullable|mimes:pdf|max:10000',
            'display_on_website' => 'required|boolean',
        ]);

        try {
            if ($request->hasFile('image')) {
                Storage::disk('public')->delete($newsletter->image);
                $newsletter->image = $request->file('image')->store('newsletters/images', 'public');
            }

            if ($request->hasFile('pdf')) {
                Storage::disk('public')->delete($newsletter->pdf);
                $newsletter->pdf = $request->file('pdf')->store('newsletters/pdfs', 'public');
            }

            $newsletter->title = $request->input('title');
            $newsletter->display_on_website = $request->input('display_on_website', false);
            $newsletter->save();

            Log::info('Newsletter updated successfully.', ['newsletter_id' => $newsletter->id]);

            if (!$newsletter->display_on_website) {
                $this->sendNewsletterToSubscribers($newsletter);
            }

            return redirect()->route('admin.viewnewsletter')->with('success', 'Newsletter updated successfully!');
        } catch (\Exception $e) {
            Log::error('Newsletter update failed: ' . $e->getMessage());
            return back()->with('error', 'Failed to update newsletter. Please try again.');
        }
    }

    // Admin: Delete a newsletter
    // public function destroy($id)
    // {
    //     Log::info('Admin deleting a newsletter.', ['newsletter_id' => $id]);
    //     $newsletter = Newsletter::findOrFail($id);

    //     try {
    //         Storage::disk('public')->delete([$newsletter->image, $newsletter->pdf]);
    //         $newsletter->delete();

    //         Log::info('Newsletter deleted successfully.', ['newsletter_id' => $id]);
    //         return redirect()->route('admin.viewnewsletter')->with('success', 'Newsletter deleted successfully!');
    //     } catch (\Exception $e) {
    //         Log::error('Newsletter deletion failed: ' . $e->getMessage());
    //         return back()->with('error', 'Failed to delete newsletter. Please try again.');
    //     }
    // }
    // Admin: Delete a newsletter
public function destroy($id)
{
    Log::info('Admin deleting a newsletter.', ['newsletter_id' => $id]);
    
    try {
        $newsletter = Newsletter::findOrFail($id);
        
        // Delete associated files if they exist
        $deletedFiles = [];
        
        // Delete image file
        if ($newsletter->image && Storage::disk('public')->exists($newsletter->image)) {
            if (Storage::disk('public')->delete($newsletter->image)) {
                $deletedFiles[] = 'Image deleted successfully';
                Log::info('Newsletter image deleted', ['path' => $newsletter->image]);
            } else {
                Log::error('Failed to delete newsletter image', ['path' => $newsletter->image]);
            }
        }
        
        // Delete PDF file
        if ($newsletter->pdf && Storage::disk('public')->exists($newsletter->pdf)) {
            if (Storage::disk('public')->delete($newsletter->pdf)) {
                $deletedFiles[] = 'PDF deleted successfully';
                Log::info('Newsletter PDF deleted', ['path' => $newsletter->pdf]);
            } else {
                Log::error('Failed to delete newsletter PDF', ['path' => $newsletter->pdf]);
            }
        }
        
        // Delete the newsletter record
        if ($newsletter->delete()) {
            $message = 'Newsletter deleted successfully';
            if (!empty($deletedFiles)) {
                $message .= ' (' . implode(', ', $deletedFiles) . ')';
            }
            
            Log::info('Newsletter deleted successfully.', ['newsletter_id' => $id]);
            return redirect()->route('admin.viewnewsletter')
                ->with('success', $message);
        } else {
            throw new \Exception('Failed to delete newsletter record');
        }
        
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        Log::error('Newsletter not found for deletion', ['id' => $id]);
        return back()->with('error', 'Newsletter not found');
        
    } catch (\Exception $e) {
        Log::error('Newsletter deletion failed: ' . $e->getMessage(), [
            'id' => $id,
            'exception' => $e
        ]);
        
        return back()->with('error', 'Failed to delete newsletter: ' . $e->getMessage());
    }
}

    // Frontend: Display newsletters with pagination
    public function frontendIndex()
    {
        Log::info('User accessed the newsletter index page.');
        $newsletters = Newsletter::where('display_on_website', 1)->latest()->paginate(10);
        return view('newsletter', compact('newsletters'));
    }

    // Frontend: Handle newsletter subscription
    public function subscribe(Request $request)
    {
        Log::info('User attempting to subscribe to the newsletter.');

        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:subscribers,email',
                'phone' => 'nullable|string|max:20|regex:/^[0-9]{10}$/',
            ]);

            // Check if subscriber exists but is unverified
            $existingSubscriber = Subscriber::where('email', $validated['email'])->first();

            if ($existingSubscriber) {
                if ($existingSubscriber->verified) {
                    throw ValidationException::withMessages([
                        'email' => 'This email is already subscribed.'
                    ]);
                } else {
                    // Resend verification email
                    Mail::to($existingSubscriber->email)
                        ->send(new NewsletterVerification($existingSubscriber->verification_token));

                    return response()->json([
                        'success' => true,
                        'message' => 'Verification email resent. Please check your inbox.'
                    ]);
                }
            }

            // Create new subscriber
            $token = Str::random(60);
            $subscriber = Subscriber::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? null,
                'verification_token' => $token,
            ]);

            Log::info('Subscriber created successfully.', ['subscriber_id' => $subscriber->id]);

            // Send verification email
            Mail::to($subscriber->email)->send(new NewsletterVerification($token));

            return response()->json(['success' => true]);

        } catch (ValidationException $e) {
            Log::error('Subscription validation failed: ' . json_encode($e->errors()));
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Subscription failed: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An error occurred. Please try again later.'
            ], 500);
        }
    }

    // Frontend: Handle email verification
    public function verify($token)
    {
        Log::info('User attempting email verification.', ['token' => $token]);

        try {
            $subscriber = Subscriber::where('verification_token', $token)->firstOrFail();

            $subscriber->update([
                'verified' => true,
                'verification_token' => null,
            ]);

            Log::info('Subscriber email verified successfully.', ['subscriber_id' => $subscriber->id]);

            return redirect()->route('newsletter')->with('success', 'Email verified successfully! You will now receive our newsletters.');

        } catch (\Exception $e) {
            Log::error('Email verification failed: ' . $e->getMessage());
            return redirect()->route('newsletter')->with('error', 'Invalid or expired verification link. Please try subscribing again.');
        }
    }

    /**
     * Send newsletter to all verified subscribers
     */
    protected function sendNewsletterToSubscribers(Newsletter $newsletter)
    {
        try {
            $subscribers = Subscriber::where('verified', true)->cursor();
            
            foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)
                    ->queue(new NewsletterPublished($newsletter));
            }

            Log::info('Newsletter sent to subscribers.', ['newsletter_id' => $newsletter->id]);
        } catch (\Exception $e) {
            Log::error('Failed to send newsletter to subscribers: ' . $e->getMessage());
        }
    }
}