<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuickAdviceMail;

class QuickAdviceController extends Controller
{
    public function sendQuickAdvice(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'email' => 'required|email',
        ]);

        // Prepare data
        $data = [
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
        ];

        // Send email
        Mail::to('customerservice@dhanavruksha.in')->send(new QuickAdviceMail($data));

        // Return a JSON response
        return response()->json(['success' => 'Your request has been submitted successfully!']);
    }
}