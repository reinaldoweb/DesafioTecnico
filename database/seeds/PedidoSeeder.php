<?php

use Illuminate\Database\Seeder;
use \App\Pedido;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $pedido = new Pedido();
        $pedido->produto_id = 1;
        $pedido->cliente_id = 1;
        $pedido->cod_endereco = 1;
        $pedido->save();
    }
}
