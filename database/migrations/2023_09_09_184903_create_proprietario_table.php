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
        Schema::create('proprietarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('foto');
            $table->string('email');
            $table->string('cpf')->unique();
            $table->date('dataNascimento');
            $table->string('endereco');
            $table->string('telefone');
           });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proprietario');
    }
};
