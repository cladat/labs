<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ArticleMail extends Mailable
{
    use Queueable, SerializesModels;
    public $article;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($article)
    {
        $this->article=$article;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('yas@queen.com')->view('email.articlemail');
    }
}
