<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuickAdviceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from('info@dhanavruksha.in', 'Dhanavruksha')
                    ->subject('Quick Advice Request')
                    ->view('emails.quick_advice') // Blade template for the email
                    ->with(['data' => $this->data]);
    }
}