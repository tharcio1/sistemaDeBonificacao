<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo');
            $table->string('login');
            $table->string('senha');
            $table->float('saldo_atual');
            $table->unsignedBigInteger('administrador_id');
            $table->foreign('administrador_id')->references('id')->on('administrador');
            $table->dateTime('data_criacao');
            $table->dateTime('data_alteracao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionario');
    }
}
