<?php

namespace App\Notifications;

use App\Unit;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Auth;

class AddUnitNotification extends Notification
{
    use Queueable;
    protected $unit;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Unit $unit)
    {
        $this->unit=$unit;
    }

    public function via($notifiable)
    {
        return ['database'];
    }


    public function toArray($notifiable)
    {
        return [

            'data' =>"New Unit Add with size :: " . $this->unit->size." <br> Added By " . auth()->user()->name

        ];
    }
}
