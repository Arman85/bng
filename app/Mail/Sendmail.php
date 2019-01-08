<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Sendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->text = $data['text'];
        $this->phone = $data['phone'];
        $this->name = $data['name'];
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
                        'name' => $this->name
                    ])
                    ->subject('Сообщение директору')
                    ->view('mail.sendmail');
    }
}
