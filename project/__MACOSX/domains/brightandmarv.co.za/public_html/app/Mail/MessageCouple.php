<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageCouple extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $emailAddress;
    public $name;
    public $message;

    public function __construct($data)
    {
        //

        $this->name = $data->name;
        $this->emailAddress = $data->email;
        $this->message = $data->message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = $this->message;
        return $this->from('rsvps@brightandmarv.co.za')->subject('Yay! '. $this->name.' has left you a message!')->
        view('main.message.index', ['email_address' => $this->emailAddress, 'name'=>$this->name, 'form_message'=>$message ]);
    }
}
