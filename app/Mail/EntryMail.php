<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EntryMail extends Mailable
{
    use Queueable, SerializesModels;
   
    public $input;
    public function __construct($input)
     {
            $this->input = $input;
    }

    public function build()
    {
        return $this
        ->subject('SESWebページからエントリー')
        ->markdown('emails.subscribers');
    }
}
