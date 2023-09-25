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
        
        event(new SendEmailsEvent('FUNCIONOU'));
       // $proprietarios = Proprietario::all();
       /* foreach ($proprietarios as $indice => $proprietario) {
            $multiplicador = $indice + 1;
            $quando = now()->addSecond($multiplicador * 5);
            Mail::to($proprietario['email'])->later($quando, new ComunicaProprietarios($proprietario['nome']));

        } */
        return redirect()->route('home')->with('success', 'E-mails enviados com sucesso!');
    }
}
