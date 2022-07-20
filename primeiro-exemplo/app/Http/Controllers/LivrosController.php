<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LivrosController extends Controller
{
    function index()
    {
        $livros = DB::table('livros')
            ->selectRaw("id, titulo, autor")
            ->orderBy('titulo')
            ->get();

        return view('livros.index', [
            'livros' => $livros
        ]);
    }

    function create()
    {
        return view('livros.create');
    }

    function store(Request $request)
    {
        $data = $request->all();

        unset($data['_token']);

        DB::table('livros')
            ->insert($data);

        return redirect('/livros');
    }

    function edit($id)
    {
        $livro = DB::table('livros')
            ->find($id);

        return view('livros.edit', ['livro' => $livro]);
    }

    function update(Request $request)
    {
        // Retorna vetor associativo
        $data = $request->all();
        // Remover o índice _token
        unset($data['_token']);

        $id = array_shift($data);

        DB::table('livros')
            ->where('id', $id)
            ->update($data);

        return redirect('/livros');
    }

    function show($id)
    {
        $livros = DB::table('livros' )
        ->selectRaw("id, titulo, autor")
        ->find($id);

        return view('livros.show', ['livro' => $livros]);
    }

    function destroy($id)
    {
        DB::table('livros' )
        ->where('id' , $id)
        ->delete();

        return redirect('/livros');
    }
}
