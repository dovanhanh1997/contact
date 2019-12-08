<?php

namespace HanhDo\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    private $name;
    private $message;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $message
     */
    public function __construct($name, $message)
    {
        //
        $this->name = $name;
        $this->mesage = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')
            ->with(['name' => $this->name, 'message' => $this->message]);
    }
}
