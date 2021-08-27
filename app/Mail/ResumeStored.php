<?php

namespace App\Mail;

use App\Models\Respond;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResumeStored extends Mailable
{
    use Queueable, SerializesModels;

    public $respond;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Respond $respond)
    {
        $this->respond = $respond;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->subject('Новое резюме')->markdown('vendor.mail.message');
    }
}
