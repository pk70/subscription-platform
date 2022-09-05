<?php

namespace App\Observers;

use App\Events\PostCreated;
use App\Models\WebsitePost;
use Illuminate\Support\Facades\Event;

class PostObserver
{
    /**
     * Handle the WebsitePost "created" event.
     *
     * @param  \App\Models\WebsitePost  $websitePost
     * @return void
     */
    public function created(WebsitePost $websitePost)
    {
        event(new PostCreated($websitePost));

    }

    /**
     * Handle the WebsitePost "updated" event.
     *
     * @param  \App\Models\WebsitePost  $websitePost
     * @return void
     */
    public function updated(WebsitePost $websitePost)
    {
        //
    }

    /**
     * Handle the WebsitePost "deleted" event.
     *
     * @param  \App\Models\WebsitePost  $websitePost
     * @return void
     */
    public function deleted(WebsitePost $websitePost)
    {
        //
    }

    /**
     * Handle the WebsitePost "restored" event.
     *
     * @param  \App\Models\WebsitePost  $websitePost
     * @return void
     */
    public function restored(WebsitePost $websitePost)
    {
        //
    }

    /**
     * Handle the WebsitePost "force deleted" event.
     *
     * @param  \App\Models\WebsitePost  $websitePost
     * @return void
     */
    public function forceDeleted(WebsitePost $websitePost)
    {
        //
    }
}
