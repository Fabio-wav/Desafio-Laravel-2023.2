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
    'animal_id,',
    'tratamento',
    'dataHoraInicio',
    'daraHoraFim',
    'custo',
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }

    
}
