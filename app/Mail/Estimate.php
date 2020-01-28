<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Estimate extends Mailable
{
    use Queueable, SerializesModels;
    private $inputs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->inputs=$inputs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.estimate')->with(['inputs'=>$this->inputs])->subject("DDA - Estimate");
    }
}
