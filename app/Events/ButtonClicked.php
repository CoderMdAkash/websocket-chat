<?php
namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

final class ButtonClicked implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;

    public function __construct($message) {
        $this->message = $message;
    }

    public function broadcastAs(): string
    {
        return 'button.clicked';
    }

    public function broadcastWith(): array
    {
        return [
            'message' => $this->message,
        ];
    }

    public function broadcastOn(): array
    {
        return [
            new Channel('public-channel'),
        ];
    }
}