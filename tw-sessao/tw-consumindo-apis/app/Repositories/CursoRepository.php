<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class CursoRepository
{
    public function create($dados)
    {
        $response = Http::post('http://172.24.192.1:3002/api/treinaweb/curso', $dados);
        return $response->successful();
    }
    
    public function update($id, $dados)
    {
        $response = Http::put('http://172.24.192.1:3002/api/treinaweb/curso?id='.$id, $dados);
        return $response->successful();
    }

    public function delete($id)
    {
        $response = Http::delete('http://172.24.192.1:3002/api/treinaweb/curso?id='.$id);
        return $response->successful();
    }

    public function list()
    {
        $response = Http::get('http://172.24.192.1:3002/api/treinaweb/curso');
        return $response->successful();
    }
}
