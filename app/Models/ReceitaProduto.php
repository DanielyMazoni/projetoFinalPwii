<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quantidade;
use App\Models\Produto;
class ReceitaProduto extends Model
{
    use HasFactory;
    protected $table = "receita_produtos";
}
