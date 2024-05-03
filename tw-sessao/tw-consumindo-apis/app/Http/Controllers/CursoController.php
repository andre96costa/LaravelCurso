<?php

namespace App\Http\Controllers;

use App\Repositories\CursoRepository;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function create(CursoRepository $cursoRepository)
    {
        $resultado = $cursoRepository->create([
            'nome' => 'PHP fundamentos',
            'linguagem' => 'PHP',
        ]);
        if ($resultado) {
            return 'criado com sucesso';
        }
        return 'erro ao criar';
    }

    public function update(CursoRepository $cursoRepository)
    {
        $resultado = $cursoRepository->update(1,[
            'nome' => 'PHP fundamentos 2',
            'linguagem' => 'PHP',
        ]);
        if ($resultado) {
            return 'atualizado com sucesso';
        }
        return 'erro ao atualizar';
    }

    public function delete(CursoRepository $cursoRepository)
    {
        $resultado = $cursoRepository->delete(1);
        if ($resultado) {
            return 'deletado com sucesso';
        }
        return 'erro ao deletar';
    }

    public function buscar(CursoRepository $cursoRepository)
    {
        $resultado = $cursoRepository->list();
        if ($resultado) {
            return 'retornando dados';
        }
        return 'erro ao retornar';
    }
}
