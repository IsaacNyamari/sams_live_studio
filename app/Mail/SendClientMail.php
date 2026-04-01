<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendClientMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    
    public $subject;
    public $messageContent; // Renamed from $message to avoid conflict with Mailable's message method
    public $email;
    public $name;
    
    /**
     * Create a new message instance.
     */
    public function __construct($name, $subject, $message, $email)
    {
        $this->subject = $subject;
        $this->messageContent = $message; // Store as messageContent
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'layouts.mail.send-client',
            with: [
                'name' => $this->name,
                'messageContent' => $this->messageContent,
                'email' => $this->email,
                'subject' => $this->subject,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}