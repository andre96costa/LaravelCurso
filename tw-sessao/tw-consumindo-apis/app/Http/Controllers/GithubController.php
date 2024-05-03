<?php

namespace App\Http\Controllers;

use App\Services\GithubService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GithubController extends Controller
{
    public function buscar(GithubService $github)
    {
        $repositorios = $github->buscarRepositorios();
        return view('github.buscar', compact('repositorios'));
    }
}
