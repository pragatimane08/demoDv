<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class MeetingScheduled extends Mailable
{
    use Queueable, SerializesModels;

    public $meetingDetails;

    // Inject request data into the mailable class
    public function __construct(Request $request)
    {
        $this->meetingDetails = $request;
    }

    public function build()
    {
        return $this->view('emails.meetingScheduled')
                    ->subject('New Meeting Scheduled')
                    ->with([
                        'name' => $this->meetingDetails->name,
                        'email' => $this->meetingDetails->email,
                        'phone' => $this->meetingDetails->phone,
                        'date' => $this->meetingDetails->date,
                        'time' => $this->meetingDetails->time,
                    ]);
    }
}
