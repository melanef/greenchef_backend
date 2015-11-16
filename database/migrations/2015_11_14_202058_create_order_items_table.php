<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_itens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pedido')->unsigned();
            $table->integer('quantidade');
            $table->string('medida');
            $table->string('quantidade_nominal');
            $table->timestamps();

            $table->foreign('pedido')->references('id')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pedido_itens');
    }
}
