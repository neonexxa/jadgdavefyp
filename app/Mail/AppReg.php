<?php

namespace App\Mail;
use App\User;
use App\Applicant;
use Auth;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppReg extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Applicant $appl,$details)
    {   
        $this->applicant = $appl;
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.send')
                ->from('noreply@kofixlabs.co', Auth::user()->name)
                ->subject($this->details['subject'])
                ->with([
                        'applicant' => $this->applicant,
                    ]);
                // ->from($address, $name)
                // ->cc($address, $name)
                // ->bcc($address, $name)
                // ->replyTo($address, $name)
                // ->subject($subject);
    }
}
