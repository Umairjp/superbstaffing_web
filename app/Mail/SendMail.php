<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $testMailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($testMailData)
    {
        $this->testMailData = $testMailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('OTP reset password')
                    ->view('emails.otp');
    }
}
