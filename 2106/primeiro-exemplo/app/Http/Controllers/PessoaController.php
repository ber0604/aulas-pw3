<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaController extends Controller
{

    var $pessoas = [
        ['id' => 1, 'nome' => 'Thyago', 'sobrenome' => 'Salvá'],
        ['id' => 2, 'nome' => 'bernardo', 'sobrenome' => 'Marquetti']
    ];

    function index()
    {
        print "<ul>";
        foreach ($this->pessoas as $pessoa) {
            print "<li> {$pessoa['nome']} {$pessoa['sobrenome']}</li>";
        }
        print "</ul>";
    }

    function show($id)
    {
        $p = [];
        // foreach ($this->pessoas as $pessoa) {
        //     if ($pessoa['id' == $id]) {
        //         $p = $pessoa['id'];
        //         break;
        //     }
        // }

        $p = array_values(array_filter(
            $this->pessoas,
            function ($a) use ($id) {
                return $a['id'] == $id;
            }));
            if (empty($a)){
                print "<b> Nenhuma pessoa encontrada com o id: {$id}</b>";
            }else{
                $p =$p[0];
            }

        print "<h2>Pessoa</h2>";
        print "<p>A pessoa com o id = {$id} é: </p>";
        print "<label>{$p['nome']}  {$p['sobrenome']} </label>";
    }
}
