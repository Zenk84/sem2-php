<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Register extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $user = null)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /*$user = new class {
            public $name = "Nguyen Duy";
            public $link = 'https://mailtrap.io/inboxes/1120457/messages';
        };*/
        return $this->view('mails.register')->subject('Test demo email');
//        return $this->view('mails.register', ['user' => $user]);
    }
}
