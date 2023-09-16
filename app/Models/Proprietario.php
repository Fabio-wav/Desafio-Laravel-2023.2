<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietario extends Model
{
    use HasFactory;
    protected $table = "proprietarios";

    protected $fillable = [
        'nome',
        'email',
        'foto',
        'cpf',
        'dataNascimento',
        'endereco',
        'telefone',
    ];

    public function animais()
    {
        return $this->hasMany(Animal::class);
    }
}
