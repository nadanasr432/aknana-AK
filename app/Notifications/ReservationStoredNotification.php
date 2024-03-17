<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReservationStoredNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $reservation;

    public function __construct($reservation)
    {
        $this->reservation = $reservation;
    }

    public function toDatabase($notifiable)
    {
        return [
            'reservation_id' => $this->reservation->id,
            'message' => 'Your reservation has been created successfully.',
            // Add any additional data you want to store in the database
        ];
    }

}
