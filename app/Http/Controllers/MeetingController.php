<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MeetingScheduled;
use Exception;

class MeetingController extends Controller
{
    /**
     * Display the meeting scheduling form.
     */
    public function showForm()
    {
        return view('schedulemeeting', [
            'already_submitted' => session('already_submitted'),
        ]);
    }

    /**
     * Handle the form submission.
     **/
    
public function handleForm(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|regex:/^\d{10,15}$/',
        'date' => 'required|date|after_or_equal:today',
        'time' => 'required|date_format:H:i',
    ]);

    try {
        // Send email notification
        Mail::to('rockstarnihar22@gmail.com')->send(new MeetingScheduled($request));

        // Set flash session variable
        return redirect()->route('schedule.meeting.form')
            ->with('success', 'Your meeting has been scheduled successfully!');
    } catch (Exception $e) {
        // Set error flash session variable
        return redirect()->route('schedule.meeting.form')
            ->with('error', 'Failed to schedule the meeting. Please try again later.');
    }
}
}
