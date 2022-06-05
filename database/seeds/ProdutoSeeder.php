<?php

use App\Produto;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produto = new Produto();
        $produto->nome = 'Notebook Acer';
        $produto->descricao = 'Notebook intel Core i5';
        $produto->preco_venda = 3500;
        $produto->estoque_maximo = 5;
        $produto->produto_id = 1;
        $produto->save();

    }
}
