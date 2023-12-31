<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\AddEmployerNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\AddEmployee;


class AlertAdmin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AddEmployee $event): void
    {
        $employer = $event->employer;
        $admin = User::where('role','super')->first();
       if ($admin) {
          $admin->notify(new AddEmployerNotification($employer));
      }
    }
}
