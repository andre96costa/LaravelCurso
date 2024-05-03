<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function __invoke(string $codigo)
    {
        if (!$codigo) {
            echo "serviço náo encontrado";
            return;
        }
       $servicos = [
            'php' => 'Detalhes do serviço de PHP',
            'front' => 'Detalhes do serviço de frontend',
            'devops' => 'Detalhes do serviço de devops',
       ];
    
       $descricao = $servicos[$codigo];
       return view('servico', [ 'descricao' => $descricao]); 
    }
}
