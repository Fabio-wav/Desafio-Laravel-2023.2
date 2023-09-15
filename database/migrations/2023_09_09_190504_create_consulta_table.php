<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('tratamento');
            $table->foreignId('animal_id')->constrained('animais')->onDelete('cascade');
            $table->dateTime('dataHoraInicio');
            $table->dateTime('daraHoraFim');
            $table->float('custo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consulta');
    }
};
