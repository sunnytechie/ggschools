<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $compose;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $child_name, $child_age, $message)
    {
        $this->compose = [
            'name' => $name,
            'email' => $email,
            'child_name' => $child_name,
            'child_age' => $child_age,
            'message' => $message,
        ];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.appointment')
        ->subject($this->compose['name']);
    }
}
