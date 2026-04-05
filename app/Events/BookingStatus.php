<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BookingStatus implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $userId;

    public $status;

    public $message;

    /**
     * Create a new event instance.
     */
    public function __construct(User $user, $status, $message)
    {
        $this->userId = $user->id;
        $this->message = $message;
        $this->status = $status;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('user-booking-updates.'.$this->userId),
        ];
    }

    public function broadcastAs(): string
    {
        return 'booking-status-updated';
    }

    public function broadcastWith(): array
    {
        return [
            'message' => $this->message,
            'status' => $this->status,
        ];
    }
}
