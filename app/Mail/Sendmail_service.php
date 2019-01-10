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
        $this->serviceName = $data['service-name'];
        $this->name = $data['name'];
        $this->number = $data['number'];
        $this->shortDescription = $data['short-description'];
        $this->city = $data['city'];
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
                        'serviceName' => $this->serviceName,
                        'name' => $this->name,
                        'number' => $this->number,
                        'short-description' => $this->shortDescription,
                        'city' => $this->city

                    ])
                    ->subject('Выбор услуги')
                    ->view('mail.sendmail_service');
    }
}
