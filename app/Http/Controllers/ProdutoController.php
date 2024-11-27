<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function criar(Request $request) {
        $produto = new Produto;
        $produto->descricao = $request->descricao;
        $produto->medida = $request->medida;
       
        $produto->save();
        return redirect('/listar_produtos');
    }

    public function formCriarProduto() {
        return view("cadastro_produto");
    }

    public function listar() {
        $produtos = Produto::all();

        return view("produtos", ["produtos"=>$produtos]);
    }

}
