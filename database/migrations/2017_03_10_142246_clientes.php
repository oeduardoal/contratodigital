<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('inputRazaoSocial');
            $table->string('inputCNPJ');
            $table->string('inputEndereco');
            $table->string('inputCEP');
            $table->string('inputCidade');
            $table->string('inputEstado');
            $table->string('inputTelefone');
            $table->string('inputNome');
            $table->string('inputCPF');
            $table->string('inputEmail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
