<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserStatusEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function broadcastWith(): array
    {
        return [
            'data' => $this->data,
        ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PresenceChannel('status-update'),
        ];
    }
}

// public $message;

//     public function __construct($message) {
//         $this->message = $message;
//     }

//     public function broadcastAs(): string
//     {
//         return 'button.clicked';
//     }

//     public function broadcastWith(): array
//     {
//         return [
//             'message' => $this->message,
//         ];
//     }

//     public function broadcastOn(): array
//     {
//         return [
//             new Channel('public-channel'),
//         ];
//     }
