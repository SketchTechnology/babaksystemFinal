<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Dashboard\Employer;


class AddEmployerNotification extends Notification
{
    use Queueable;
    protected $employer ;

    /**
     * Create a new notification instance.
     */
    public function __construct(Employer $employer)
    {
        $this->employer = $employer ;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
         return (new MailMessage)
            ->subject("New Employer #{$this->employer->id} ")
            ->greeting("Hi {$notifiable->name}")
            ->line("a new employer #{$this->employer->id} has been added to  {$this->employer->company->name} ")
             ->line('Thank you for using BABEK!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
