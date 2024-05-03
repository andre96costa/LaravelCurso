<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CadastroController extends Controller
{
    function store(CursoRequest $request) 
    {
        // Validator::make(
        //     $request->except('_token'),
        //     [
        //         'curso' => ['required', 'max:100', ],
        //         'carga' => ['required', 'integer']
        //     ]
        // )->validate();

        // if ($validacao->fails()) {
        //   return redirect()->back()->withInput()->withErrors($validacao);
        // }

        // $request->validate([
        //     'curso' => ['required', 'max:100', ],
        //     'carga' => ['required', 'integer']
        // ]);
        dd($request->all());
    }


    function storeApi(CursoRequest $request) 
    {
        $arr = ['curso' => 'PHP', 'carga' => 10];
        $json = json_encode($arr);
        dd($json);
    }
}
