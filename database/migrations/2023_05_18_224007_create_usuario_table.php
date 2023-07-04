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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('endereco');
            $table->string('sexo')->nullable();
            $table->unsignedBigInteger('tipo_usuario_id');
            $table->unsignedBigInteger('servico_id')->nullable();
            $table->string('email')->unique();
            $table->string('senha');
            $table->timestamps();
            $table->foreign('tipo_usuario_id')->references('id')->on('tipos_usuario');
            $table->foreign('servico_id')->references('id')->on('servicos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
