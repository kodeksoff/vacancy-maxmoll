<?php

namespace App\Listeners;

use App\Events\StoredResume;
use App\Mail\ResumeStored;
use App\Models\Config;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class StoredResumeListener
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
     * @param  StoredResume  $event
     * @return void
     */
    public function handle(StoredResume $event)
    {
        $emails = explode(',', Config::getValue('emails'));
        Mail::to($emails)->send(new ResumeStored($event->data));
    }
}
