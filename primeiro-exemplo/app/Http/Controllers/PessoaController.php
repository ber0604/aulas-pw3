<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PessoaController extends Controller
{
    function index()
    {
        //$pessoas = DB::select('select * from pessoas;');

        $pessoas = DB::table('pessoas')
            ->SELECTraw("id , nome, sobrenome,  floor(datediff(now(), dtnasc)/?) as idade", [365])
            ->orderBy('nome')
            ->get();

        return view('pessoas.index', [
            'pessoas' => $pessoas
        ]);
    }

    function create()
    {
        return view('pessoas.create');
    }

    function store(Request $request)
    {
        $data = $request->all();

        unset($data['_token']);
        // DB::insert("
        // INSERT INTO pessoas(nome, sobrenome, dtnasc) VALUES (:nome, :sobrenome , :dtnasc);",
        // $data);
        DB::table('pessoas')->insert($data);

        return redirect('/pessoas');
    }

    function edit($id)
    {
        // $pessoas = DB::select("
        //     SELECT * FROM pessoas WHERE id = ?",
        //     [$id]
        // );
        $pessoa = DB::table('pessoas')->find($id);

        return view('pessoas.edit', ['pessoa' => $pessoa]);
    }

    function update(Request $request)
    {
        // Retorna vetor associativo
        $data = $request->all();
        // Remover o índice _token
        unset($data['_token']);

        DB::update("
            UPDATE pessoas
            SET
                nome = :nome,
                sobrenome = :sobrenome
                dtnasc = :dtnasc
            WHERE
                id = :id
        ", $data);

        return redirect('/pessoas');
    }

    function show($id)
    {
        // $pessoas = DB::select("
        //     SELECT * FROM pessoas WHERE id = :id",
        //     ['id' => $id]
        // );
        $pessoas = DB::table('pessoas')
            ->selectRaw("
        id,
        nome,
        sobrenome,
        date_format(dtnasc, '%d/%m/%Y') as dateformatada,
        floor(datediff(now(), dtnasc)/365) as idade
        ")
            ->find($id);

        return view('pessoas.show', ['pessoas' => $pessoas]);
    }

    function destroy($id)
    {
        DB::delete("DELETE FROM  pessoas  WHERE id = ?", [$id]);

        return redirect('/pessoas');
    }
}
