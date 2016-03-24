<?php

/**
 * An Event class for your package.
 * 
 * @author Neelkanth Kaushik
 * @since 1.0.0
 */

namespace Package\Application\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PackageEvent extends Event {

    use SerializesModels;

    protected $package_event;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct() {
        //

        $this->package_event = "Hey! I am an Event.";
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn() {
        return [];
    }

}
