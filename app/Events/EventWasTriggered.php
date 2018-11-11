<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EventWasTriggered implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $size;
    public $numbers;
    public $numbers2;
    public $numbers3;
    public $numbers4;
    public $numbers5;
    public $numbers6;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($size, $numbers, $numbers2, $numbers3, $numbers4, $numbers5, $numbers6)
    {
        $this->size = $size;
        $this->numbers = $numbers;
        $this->numbers2 = $numbers2;
        $this->numbers3 = $numbers3;
        $this->numbers4 = $numbers4;
        $this->numbers5 = $numbers5;
        $this->numbers6 = $numbers6;

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('default');
    }
}
