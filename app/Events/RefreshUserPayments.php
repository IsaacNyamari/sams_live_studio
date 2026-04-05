<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RefreshUserPayments implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;

    public $user;

    /**
     * Create a new event instance.
     */
    public function __construct($message, User $userId)
    {
        $this->message = $message;
        $this->user = $userId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('notifiy-admin-on-donation.'.$this->user->id),
        ];
    }

    public function broadcastAs(): string
    {
        return 'notifiy-admin-new-donation';
    }

    public function broadcastWith(): array
    {
        return ['message' => $this->message];
    }
}
