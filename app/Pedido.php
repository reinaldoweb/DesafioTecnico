<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['produto_id', 'cliente_id', 'cod_endereco'];

    public function produtos(){

        return $this->hasMany('App\Produto', 'produto_id');
    }
}
