<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    
    use HasFactory;
    protected $table = "consultas";
    protected $fillable = [
    'user_id',
    'animal_id',
    'tratamento',
    'dataHoraInicio',
    'dataHoraFim',
    'custo',
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    
}
