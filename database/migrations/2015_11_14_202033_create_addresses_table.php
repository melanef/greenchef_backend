<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario')->unsigned();
            $table->string('nome');
            $table->string('logradouro');
            $table->integer('numero')->unsigned();
            $table->string('bairro');
            $table->string('municipio');
            $table->string('uf');
            $table->string('cep');
            $table->boolean('padrao')->default(false);
            $table->timestamps();

            $table->foreign('usuario')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('enderecos');
    }
}
