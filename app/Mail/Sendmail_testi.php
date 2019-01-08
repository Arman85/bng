<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Sendmail_testi extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data = [])
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from(env('MAIL_FROM'))
                    ->with([
                        'vacancy' => $this->data['vacancy']
                    ])
                    ->subject('Резюме на вакансию')
                    ->view('mail.sendmail_vacancy')
                    ->attach($this->data['document']->getRealPath(),
                    [
                        'as' => $this->data['document']->getClientOriginalName(),
                        'mime' => $this->data['document']->getClientMimeType(),
                    ]);
                
                
    }
}
