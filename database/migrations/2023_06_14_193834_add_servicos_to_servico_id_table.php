<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddServicosToServicoIdTable extends Migration



{
    public function up()
{
    Schema::table('servicoId', function (Blueprint $table) {
        $table->string('tipo_servico1');
        $table->string('tipo_servico2');
        $table->string('tipo_servico3');
    });
}


public function down()
{
    Schema::table('servicoId', function (Blueprint $table) {
        $table->dropColumn('tipo_servico1');
        $table->dropColumn('tipo_servico2');
        $table->dropColumn('tipo_servico3');
    });
}

}
