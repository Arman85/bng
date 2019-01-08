<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Sendmail_message extends Mailable
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
                        'name' => $this->data['name'],
                        'phone' => $this->data['phone'],
                        'city' => $this->data['city'],
                        'text' => $this->data['text']
                    ])
                    ->subject('Сообщение с сайта *')
                    ->view('mail.sendmail_message');
                
                
    }
}
