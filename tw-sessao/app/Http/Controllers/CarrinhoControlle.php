<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoControlle extends Controller
{
    public function listar(Request $request)
    {
        var_dump(session()->flash('mensagem'));
        dd(session()->all());
    }

    public function adicionar(Request $request)
    {
        // $request->session()->put('produto', 'tenis');

        session(['produto' => 'Notebook', 'total' => 123]);
        $request->session()->push('produtos', ['play', 'pc']);
        $request->session()->push('produtos', ['bola']);
        $request->session()->push('produtos', 'lapis');

        session()->flash('mensagem', 'Adicionado com sucesso');

        return 'adicionado';
    }

    public function remover(Request $request)
    {
        //$request->session()->forget(['produto']);

        // session()->forget(['produto','total']);
        session()->flush();

        return 'removido';
    }
}
