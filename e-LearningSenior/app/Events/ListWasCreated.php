<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\Todolist;

class ListWasCreated extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $list;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Todolist $list)
    {
      $this->list = $list;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['list-updates'];
    }
}
