<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use Illuminate\Http\Request;

class ReceitaController extends Controller
{
    public function criar(Request $request) {
        $receita = new Receita;
        $receita->descricao = $request->descricao;

        $receita->save();
        return redirect('/listar_receitas');
    }

    public function listar() {
        $receitas = Receita::all();

        return view("receitas", ["receitas"=>$receitas]);
    }

    public function formCriarReceita() {
        return view("cadastro_receita");
    }


}