<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Request;

class Pedido extends Model
{
    protected $fillable = ['produto_id', 'cliente_id', 'cod_endereco'];

    public function pedidoInsert(Request $request){

        $data = [
            'produto_id' => $request->produto_id,
            'cliente_id' => $request->cliente_id,
            'cod_endereco' => $request->cod_endereco,
        ];
        Pedido::create($data);
    }


    public function produtos(){

        return $this->hasMany('App\Produto', 'produto_id');
    }
}
