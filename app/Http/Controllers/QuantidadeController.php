<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Receita;
use App\Models\Quantidade;
use App\Models\ReceitaProduto;
class QuantidadeController extends Controller
{
    public function formCadastrarQuantidade() {
        $receitas = Receita::all();
        $produtos = Produto::all();
        return view("cadastro_quantidade", ["receitas"=>$receitas, "produtos"=>$produtos]);
    }

    public function cadastrar(Request $request)
    {
      $items = $request->input('items');
      $receita = $request->input('receita');
      $quantidade = new Quantidade;
      $quantidade->receita_id = $receita;
      $quantidade->save();
      foreach ($items as $itemId => $quantity) {
          if ($quantity > 0) {
              $receitaProduto = new ReceitaProduto;
              $receitaProduto->quantidade_id = $quantidade->id;
              $receitaProduto->produto_id = $itemId;
              $receitaProduto->qntd = $quantity;
              $receitaProduto->save();
          }
      }

      return redirect('/listar_quantidades');
   }

   public function listar() {
    $quantidades = Quantidade::all();

    return view ('listar_quantidades', ["quantidades" => $quantidades]); 
   }
}
