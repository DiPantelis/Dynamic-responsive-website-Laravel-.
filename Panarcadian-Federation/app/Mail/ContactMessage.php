<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $vname,$vphone,$vemail,$vmessage;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($vname,$vphone,$vemail,$vmessage)
    {
        $this->vname=$vname;
        $this->vphone=$vphone;
        $this->vemail=$vemail;
        $this->vmessage=$vmessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(request('email'))
            ->view('/pages/emails/contact-me');
    }
}
