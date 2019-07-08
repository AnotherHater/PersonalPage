<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;
     
    /**
     * The demo object instance.
     *
     * @var Demo
     */
    public $sender,$name,$msg;
 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
     $sender = $data['email'];
     $name = $data['name'];
     $msg = $data['message'];
       
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail');
    }

    
}
