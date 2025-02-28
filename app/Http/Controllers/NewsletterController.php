<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\Newsletter;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterVerification;
use App\Mail\NewsletterPublished;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletters = Newsletter::paginate(10);
        return view('admin.viewnewsletter', compact('newsletters'));
    }

    public function create()
    {
        return view('admin.createnewsletter');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'pdf' => 'required|mimes:pdf',
            'display_on_website' => 'required|boolean',
        ]);

        $imagePath = $request->file('image')->store('newsletters/images', 'public');
        $pdfPath = $request->file('pdf')->store('newsletters/pdfs', 'public');

        $newsletter = Newsletter::create([
            'title' => $request->input('title'),
            'image' => $imagePath,
            'pdf' => $pdfPath,
            'display_on_website' => $request->input('display_on_website'),
        ]);

        // Send emails only if not displayed on the website
        if (!$request->input('display_on_website')) {
            $subscribers = Subscriber::where('verified', true)->get();
            foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)->send(new NewsletterPublished($newsletter));
            }
        }

        return redirect()->route('admin.viewnewsletter')->with('success', 'Newsletter created successfully!');
    }

    public function edit($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        return view('admin.editnewsletter', compact('newsletter'));
    }

    public function update(Request $request, $id)
    {
        $newsletter = Newsletter::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'pdf' => 'nullable|mimes:pdf',
            'display_on_website' => 'required|boolean',
        ]);

        $imagePath = $newsletter->image;
        $pdfPath = $newsletter->pdf;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('newsletters/images', 'public');
        }

        if ($request->hasFile('pdf')) {
            $pdfPath = $request->file('pdf')->store('newsletters/pdfs', 'public');
        }

        $newsletter->update([
            'title' => $request->input('title'),
            'image' => $imagePath,
            'pdf' => $pdfPath,
            'display_on_website' => $request->input('display_on_website'),
        ]);

        // Send emails only if not displayed on the website
        if (!$request->input('display_on_website')) {
            $subscribers = Subscriber::where('verified', true)->get();
            foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)->send(new NewsletterPublished($newsletter));
            }
        }

        return redirect()->route('admin.viewnewsletter')->with('success', 'Newsletter updated successfully!');
    }

    public function destroy($id)
    {
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->delete();

        return redirect()->route('admin.viewnewsletter')->with('success', 'Newsletter deleted successfully!');
    }

    public function frontendIndex()
    {
        $newsletters = Newsletter::where('display_on_website', true)->latest()->paginate(10);
        return view('newsletter', compact('newsletters'));
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:subscribers,email',
            'phone' => 'nullable|string|max:20',
        ]);

        $token = Str::random(60);

        $subscriber = Subscriber::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'verification_token' => $token,
        ]);

        Mail::to($subscriber->email)->send(new NewsletterVerification($token));

        return response()->json(['success' => true]);
    }

    public function verify($token)
    {
        $subscriber = Subscriber::where('verification_token', $token)->first();

        if ($subscriber) {
            $subscriber->update([
                'verified' => true,
                'verification_token' => null,
            ]);

            return redirect()->route('newsletter')->with('success', 'Email verified successfully!');
        }

        return redirect()->route('newsletter')->with('error', 'Invalid verification token.');
    }
}
