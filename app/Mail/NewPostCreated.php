<?php

namespace App\Mail;

use App\Models\Website;
use App\Models\WebsitePost;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewPostCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $post;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($post)
    {
       $this->post=$post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       // print_r($this->post);exit;
        return $this->view('emails.post') //pass here your email blade file
        ->with('body',$this->post);
    }
}
