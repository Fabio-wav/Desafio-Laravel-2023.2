<?php

namespace App\Http\Controllers;
use App\Events\SendEmailsEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ComunicaProprietarios;
use App\Models\Proprietario;

class EmailController extends Controller
{
    public function enviarEmails()
    {
        $proprietarios = Proprietario::all();
    
        $eventoEnviarEmail = new SendEmailsEvent(
            $proprietarios,
        );
        event($eventoEnviarEmail);
        return redirect()->route('home')->with('success', 'E-mails enviados com sucesso!');
    }
}
