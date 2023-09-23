<?php

namespace App\Listeners;

use App\Events\SendEmailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogSendEmail implements ShouldQueue
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
    public function handle(SendEmailEvent $event): void
    {
        $proprietarios = $event->proprietarios;

        Log::info('Email enviado ao proprietario ' . $proprietarios);
    }
}
