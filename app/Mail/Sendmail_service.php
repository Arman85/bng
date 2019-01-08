<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Sendmail_service extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->service = $data['service'];
        $this->phone = $data['phone'];
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
                        'service' => $this->service,
                        'phone' => $this->phone
                    ])
                    ->subject('Выбор услуги')
                    ->view('mail.sendmail_service');
    }
}
