<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $fillable = ['nome','descricao','preco_venda','estoque_masximo','produto_id'];


    public function pedidos(){
        return $this->hasMany('App\Pedido', 'produto_id');
    }
}
