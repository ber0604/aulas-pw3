<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PessoaController extends Controller
{
    function index(){
        $pessoas = DB::select('select * from pessoas;');

        return view('pessoas.index', [
            'pessoas' => $pessoas
        ]);
    }

    function create(){
        return view('pessoas.create');
    }

    function store(Request $request){
        $data = $request->all();

        unset($data['_token']);
        DB::insert("
        INSERT INTO pessoas(nome, sobrenome) VALUES (:nome, :sobrenome);",
        $data);

        return redirect('/pessoas');
    }

    function edit($id){
        $pessoas = DB::select("
            SELECT * FROM pessoas WHERE id = ?",
            [$id]
        );

        return view('pessoas.edit', ['pessoa' => $pessoas[0]]);
    }

    function update(Request $request){
        // Retorna vetor associativo
        $data = $request->all();
        // Remover o índice _token
        unset($data['_token']);

        DB::update("
            UPDATE pessoas
            SET
                nome = :nome,
                sobrenome = :sobrenome
            WHERE
                id = :id
        ", $data);

        return redirect('/pessoas');
    }

    function show($id){
        $pessoas = DB::select("
            SELECT * FROM pessoas WHERE id = :id",
            ['id' => $id]
        );

        return view('pessoas.show', ['pessoa' => $pessoas[0]]);
    }

    function destroy($id){
        DB::delete("DELETE FROM pessoas WHERE id = ?", [$id]);

        return redirect('/pessoas');
    }
}
