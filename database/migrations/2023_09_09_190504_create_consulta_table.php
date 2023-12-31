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
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('animal_id')->constrained('animais')->onDelete('cascade');
            $table->string('tratamento');
            $table->dateTime('dataHoraInicio');
            $table->dateTime('dataHoraFim');
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
