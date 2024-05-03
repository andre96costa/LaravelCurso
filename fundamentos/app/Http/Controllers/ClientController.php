<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Lista os clientes do banco de dados
     * @return View/Factory
     */
    public function index()
    {
        $clientes = Client::get();
        return view('clients.index',  compact('clientes'));
    }

    /**
     * Mostra o formulario de cadastro de clientes
     * @return View/Factory
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Grava o cliente no banco de dados
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => ['required', 'min:3', 'max:100'],
            'endereco' => ['required'],
            'observacao' => ['required'],
        ]);
        $dados = $request->all();
        $cliente = new Client();
        $cliente->nome = $dados['nome'];
        $cliente->endereco = $dados['endereco'];
        $cliente->observacao = $dados['observacao'];
        $cliente->save();

        return redirect('/clientes');
    }
}
