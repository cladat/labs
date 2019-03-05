<?php

namespace App\Listeners;

use App\Events\MailarticleEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Mail;
use App\Mail\ArticleMail;

class MailarticleListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MailarticleEvent  $event
     * @return void
     */
    public function handle(MailarticleEvent $event)
    {
        Mail::to('lol@lol.com')->send(new ArticleMail($event->request));
    }
}
