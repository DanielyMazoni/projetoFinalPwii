<?php

use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\QuantidadeController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_receita', [ReceitaController::class, "formCriarReceita"]);

Route::get('/listar_receitas', [ReceitaController::class, 'listar']);

Route::post('/criar_receita', [ReceitaController::class, 'criar']);

// Rotas produto
Route::get('/cadastro_produto', [ProdutoController::class, "formCriarProduto"]);

Route::post('/criar_produto', [ProdutoController::class, 'criar']);

Route::get('/listar_produtos', [ProdutoController::class, 'listar']);

// App
Route::get('/', [AppController::class, 'inicial']);

// quantidade

Route::get('/cadastro_quantidade', [QuantidadeController::class, 'formCadastrarQuantidade']);

Route::post('/cadastrar_quantidade', [QuantidadeController::class, 'cadastrar']);

Route::get('/listar_quantidades', [QuantidadeController::class, 'listar']);