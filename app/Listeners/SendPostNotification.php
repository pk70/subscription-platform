<?php

namespace App\Listeners;

use Mail;
use App\Events\PostCreated;
use App\Mail\NewPostCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPostNotification implements ShouldQueue
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
     * @param  \App\Events\PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {

        $getSubscriber = \App\Models\Subscriber::where('id_website', $event->request->id_website)->get();

        foreach ($getSubscriber as $key => $user) {
            Mail::to($user->email)
                ->send(new NewPostCreated($event));
        }
    }
}
