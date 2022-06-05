<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('produto_id');
            $table->unsignedBigInteger('cliente_id');
            $table->integer('cod_endereco');
            $table->timestamps();
        });


        Schema::table('produtos', function(Blueprint $table){
            $table->unsignedBigInteger('produto_id');
            $table->foreign('produto_id')->references('id')->on('pedidos');
        });

        Schema::table('clientes', function(Blueprint $table){
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('pedidos', function(Blueprint $table){

            $table->dropForeign('pedidos_produto_id_foreign');
            $table->dropForeign('pedidos_cliente_id_foreign');
            $table->dropColumn('produto_id');
        });

        Schema::dropIfExists('pedidos');
    }



}
