<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    
    use HasFactory;
    protected $table = "consultas";
    protected $fillable = [
    'usuario_id',
    'tratamento_id',
   'animal_id,',
    'dataHoraInicio',
    'daraHoraFim',
    'custo',
    ];
}
