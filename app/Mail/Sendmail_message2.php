<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Sendmail_message2 extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->phone = $data['phone'];
        $this->text = $data['text'];
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
                        'text' => $this->text,
                        'phone' => $this->phone,
                        'name' => $this->name,
                    ])
                    ->subject('Сообщение с сайта')
                    ->view('mail.sendmail_message2');
    }
}
