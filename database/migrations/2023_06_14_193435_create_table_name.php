<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableName extends Migration
{
    public function up()
    {
        Schema::create('servicoId', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('servicoId')->nullable();
            // outras colunas da tabela
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicoId');
    }
}


    /**
     * Reverse the migrations.
     */
 
