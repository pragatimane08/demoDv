<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    // Show the contact form
    public function showForm()
    {
        return view('contact-us');
    }

    // Handle form submission
    public function sendMail(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'message' => 'required',
        ]);

        // Collect form data
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        // Send email
        Mail::to('rockstarnihar22@gmail.com')->send(new ContactFormMail($details));

        // Redirect back with success message
        return redirect()->route('contact-us')->with('success', 'Your message has been sent successfully!');
    }
}
