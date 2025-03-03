<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\Newsletter;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\NewsletterVerification;
use App\Mail\NewsletterPublished;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    // Admin: View all newsletters with pagination
    public function index()
    {
        Log::info('Admin accessed the newsletter index page.');
        $newsletters = Newsletter::paginate(10); // Ensure pagination
        return view('admin.viewnewsletter', compact('newsletters'));
    }

    // Admin: Show create newsletter form
    public function create()
    {
        Log::info('Admin accessed the create newsletter page.');
        return view('admin.createnewsletter');
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

        // Store image and PDF
        $imagePath = $request->file('image')->store('newsletters/images', 'public');
        $pdfPath = $request->file('pdf')->store('newsletters/pdfs', 'public');

        // Create newsletter
        $newsletter = Newsletter::create([
            'title' => $request->input('title'),
            'image' => $imagePath,
            'pdf' => $pdfPath,
            'display_on_website' => $request->input('display_on_website', false),
        ]);

        Log::info('Newsletter created successfully.', ['newsletter_id' => $newsletter->id]);

        // Send emails to verified subscribers ONLY if display_on_website is false
        if (!$newsletter->display_on_website) {
            $subscribers = Subscriber::where('verified', true)->get();
            foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)->send(new NewsletterPublished($newsletter));
            }
        }

        return redirect()->route('admin.viewnewsletter')->with('success', 'Newsletter created successfully!');
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

        // Update image and PDF if provided
        if ($request->hasFile('image')) {
            $newsletter->image = $request->file('image')->store('newsletters/images', 'public');
        }
        if ($request->hasFile('pdf')) {
            $newsletter->pdf = $request->file('pdf')->store('newsletters/pdfs', 'public');
        }

        // Update newsletter data
        $newsletter->title = $request->input('title');
        $newsletter->display_on_website = $request->input('display_on_website', false);
        $newsletter->save();

        Log::info('Newsletter updated successfully.', ['newsletter_id' => $newsletter->id]);

        // Send emails to verified subscribers ONLY if display_on_website is false
        if (!$newsletter->display_on_website) {
            $subscribers = Subscriber::where('verified', true)->get();
            foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)->send(new NewsletterPublished($newsletter));
            }
        }

        return redirect()->route('admin.viewnewsletter')->with('success', 'Newsletter updated successfully!');
    }

    // Admin: Delete a newsletter
    public function destroy($id)
    {
        Log::info('Admin deleting a newsletter.', ['newsletter_id' => $id]);
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->delete();

        Log::info('Newsletter deleted successfully.', ['newsletter_id' => $id]);

        return redirect()->route('admin.viewnewsletter')->with('success', 'Newsletter deleted successfully!');
    }

    // Frontend: Display newsletters with pagination
    public function frontendIndex()
    {
        Log::info('User accessed the newsletter index page.');
        $newsletters = Newsletter::where('display_on_website', true)->latest()->paginate(10); // Ensure pagination
        return view('newsletter', compact('newsletters'));
    }

    // Frontend: Handle newsletter subscription
    public function subscribe(Request $request)
    {
        Log::info('User attempting to subscribe to the newsletter.');
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:subscribers,email',
            'phone' => 'nullable|string|max:20|regex:/^[0-9]{10}$/',
        ]);

        // Generate verification token
        $token = Str::random(60);

        // Create subscriber
        $subscriber = Subscriber::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'verification_token' => $token,
        ]);

        Log::info('Subscriber created successfully.', ['subscriber_id' => $subscriber->id]);

        // Send verification email
        Mail::to($subscriber->email)->send(new NewsletterVerification($token));

        return response()->json(['success' => true]);
    }

    // Frontend: Handle email verification
    public function verify($token)
    {
        Log::info('User attempting email verification.', ['token' => $token]);
        $subscriber = Subscriber::where('verification_token', $token)->first();

        if ($subscriber) {
            // Mark subscriber as verified
            $subscriber->update([
                'verified' => true,
                'verification_token' => null,
            ]);

            Log::info('Subscriber email verified successfully.', ['subscriber_id' => $subscriber->id]);

            return redirect()->route('newsletter')->with('success', 'Email verified successfully!');
        }

        Log::error('Invalid verification token.', ['token' => $token]);

        return redirect()->route('newsletter')->with('error', 'Invalid verification token.');
    }
}