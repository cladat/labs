<?php

namespace App\Listeners;

use App\Events\MailEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Mail\NewMail;

use Mail;

class MailListener
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
     * @param  MailEvent  $event
     * @return void
     */
    public function handle(MailEvent $event) {
        Mail::to($event->lucas)->send(new NewMail($event->lucas));
    }
}
