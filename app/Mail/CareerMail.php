<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $image_name=$this->mailData['filename'];
        $location = storage_path("app/public/career/".$image_name);
         return $this->subject($this->mailData['subject'])
        ->view('mail.career_mail')->attach($location);
  
    }
}
