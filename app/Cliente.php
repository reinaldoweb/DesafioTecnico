<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Request;

class Cliente extends Model
{

    protected $fillable = ['nome','cpf','enderece','telefone','email'];

    public function clienteInsert(Request $request){
        $data = [
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone,
            'email' =>$ $request->email
        ];
        Cliente::create($data);
    }

    //
}
