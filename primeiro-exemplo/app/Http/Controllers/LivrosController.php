<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LivrosController extends Controller
{
    function index()
    {
        $livros = DB::select('select * from livros;');

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
        DB::insert(
            "
        INSERT INTO livros(titulo, autor) VALUES (:titulo, :autor);",
            $data
        );

        return redirect('/livros');
    }

    function edit($id)
    {
        $livros = DB::select(
            "
            SELECT * FROM livros WHERE id = ?",
            [$id]
        );

        return view('livros.edit', ['livro' => $livros[0]]);
    }

    function update(Request $request)
    {
        // Retorna vetor associativo
        $data = $request->all();
        // Remover o índice _token
        unset($data['_token']);

        DB::update("
            UPDATE livros
            SET
                titulo = :titulo,
               autor = :autor
            WHERE
                id = :id
        ", $data);

        return redirect('/livros');
    }

    function show($id)
    {
        $livros = DB::select(
            "
            SELECT * FROM livros WHERE id = :id",
            ['id' => $id]
        );

        return view('livros.show', ['livro' => $livros [0]]);
    }

    function destroy($id)
    {
        DB::delete("DELETE FROM livros WHERE id = ?", [$id]);

        return redirect('/livros');
    }
}
