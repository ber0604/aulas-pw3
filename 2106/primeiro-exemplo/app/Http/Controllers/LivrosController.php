<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosController extends Controller
{
    var $livros = [
        ['id' => 1, 'titulo' => 'Dom Casmurro', 'autor' => 'Machado de Assis'],
        ['id' => 1, 'titulo' => 'Os Sertões', 'autor' => 'Euclides da Cunha']
    ];

    function index()
    {
        return view('livros.index', [
            'livros' => $this->livros
        ]);
    }

    function show($id)
    {
        $p = [];

        $p = array_values(array_filter(
            $this->livros,
            function ($a) use ($id) {
                return $a['id'] = $id;
            }
        ));
        if (empty($a)){
            print "<b>Nenhuma pessoa encontrada com o id: {$id}</b>";
        }else{
            $p = $p[0];
        }
        print "<h2>Livro</h2>";
        print "<p>A livro com o id = {$id} é: </p>";
        print "<label>{$p['titulo']}  {$p['autor']} </label>";
    }
}
