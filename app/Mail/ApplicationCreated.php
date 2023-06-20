<?php

namespace App\Mail;

use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationCreated extends Mailable
{
    use Queueable, SerializesModels;
    public Application $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Application Created',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }


    public function attachments(): array
    {
        return [];
    }
    public function build(){
        return $this->from('example@example.com', 'Example')->subject('Application Created')->view('emails.application_created')->attachFromStorageDisk('public',$this->application->file_url);
    }
}
