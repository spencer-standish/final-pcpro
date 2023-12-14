<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactName;
    public $contactEmail;
    public $contactSubject;
    public $contactMessage;
    /**
     * Create a new message instance.
     */
    public function __construct($contactName, $contactEmail, $contactSubject, $contactMessage)
    {
        $this->contactName = $contactName;
        $this->contactEmail = $contactEmail;
        $this->contactSubject = $contactSubject;
        $this->contactMessage = $contactMessage;
    }

    public function build(){
        return $this->subject('contact form received')->view('mails.confirmEmailView');
    }


    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Contact Form Mail',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
