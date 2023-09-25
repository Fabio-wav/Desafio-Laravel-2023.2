<?php

namespace App\Http\Controllers;
use App\Events\SendEmailsEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ComunicaProprietarios;
use App\Models\Proprietario;
use App\Listeners\SendEmailsListener;

class EmailController extends Controller
{

    public function escreverEmails()
    {
        return view('mail.proprietario.escrever-emails');
    }

    public function enviarEmails(Request $request)
    {
        $mensagem = $request->input('mensagem');
        
        // Cria uma instância do ouvinte e configura a mensagem


        // Dispara o evento
        event(new SendEmailsEvent($mensagem));

        return redirect()->route('home')->with('success', 'E-mails enviados com sucesso!');
    }
}
