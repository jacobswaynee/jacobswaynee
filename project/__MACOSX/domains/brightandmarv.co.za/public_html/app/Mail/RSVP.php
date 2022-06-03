<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RSVP extends Mailable
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
        return $this->from('rsvps@brightandmarv.co.za')->subject('Yay! '. $this->name.' wants to come to the wedding!!')->
        view('coming_soon.rsvp.index', ['email_address' => $this->emailAddress, 'name'=>$this->name, 'message'=>$message ]);
    }
}
