<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Mail;
use App\Events\SendEmailsEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Proprietario;

class SendEmailsListener
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
    public function handle(SendEmailsEvent $event)
{
    $proprietarios = $event->proprietarios;

    foreach ($proprietarios as $indice => $proprietario) {
        $multiplicador = $indice + 1;
        $quando = now()->addSecond($multiplicador * 5);
        Mail::to($proprietario['email'])->later($quando, new ComunicaProprietarios($proprietario['nome']));
    }
}
}
