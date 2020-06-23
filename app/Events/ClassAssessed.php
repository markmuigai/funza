<?php

namespace App\Events;

use App\Classroom;
use App\Substrand;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ClassAssessed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $classroom;

    public $substrand;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Classroom $classroom, Substrand $substrand)
    {
        $this->classroom = $classroom;
        $this->substrand = $substrand;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
