<?php

/**
 * An event listener for your package.
 * 
 * @author Neelkanth Kaushik
 * @since 1.0.0
 */

namespace Package\Application\Listeners;

use Package\Application\Events\PackageEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PackageEventListener {

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PackageEvent  $event
     * @return void
     */
    public function handle(PackageEvent $event) {
        //Do something
        dd($event);
    }

}
