<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotifyAdminOnPayment extends Mailable
{
    use Queueable, SerializesModels;

    public $name;

    public $email;

    public $amount;

    public $time;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $amount, $time)
    {
        $this->name = $name;
        $this->email = $email;
        $this->amount = $amount;
        $this->time = $time;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New payment from '.$this->name,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.notify-admin-on-donation',
            with: [
                'name' => $this->name,
                'email' => $this->email,
                'amount' => $this->amount,
                'time' => $this->time,
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
