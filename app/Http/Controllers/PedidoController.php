<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    //
    public function pedido(){
        return view('site.pedido', ['titulo'=> 'Pedido']);
    }


}
