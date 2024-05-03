<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Response $response)
    {
        //    return $response->setContent('<h1> Ola mundo </h1>')
        //                 ->setStatusCode(200)
        //                 ->header('Content-Type', 'text/html');

        //return response('<h1> Ola mundo </h1>', 200, ['Content-Type' => 'text/html']);

        // $clientes = [
        //     'Joao' => ['nome' => 'Joao', 'idade' => 20],
        //     'Maria' => ['nome' => 'Maria', 'idade' => 40]
        // ];

        // return response()->json( $clientes, 202);

        // return response()->download(storage_path('app\public\f1.jpg'));

        return redirect()->route('clientes.create')->with(['ok' => 'Todo certo']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->foto);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
