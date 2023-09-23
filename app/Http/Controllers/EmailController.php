<?php

namespace App\Http\Controllers;

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

        foreach ($proprietarios as $proprietario) {
            Mail::to($proprietario['email'])->send(new ComunicaProprietarios($proprietario['nome']));
            sleep(5);
        }

        return redirect()->route('home')->with('success', 'E-mails enviados com sucesso!');
    }
}
