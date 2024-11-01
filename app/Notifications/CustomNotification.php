<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Broadcasting\BroadcastMessage;
use Illuminate\Notifications\Messages\BroadcastMessage as MessagesBroadcastMessage;

class CustomNotification extends Notification
{
    public function via($notifiable)
    {
        return ['broadcast', 'database'];
    }

    public function toBroadcast($notifiable)
    {
        return new MessagesBroadcastMessage([
            'title' => 'Saved successfully to yrdy',
        ]);
    }

    public function toDatabase($notifiable)
    {
        return [
            'title' => 'Saved successfully to yrdy',
        ];
    }
}
