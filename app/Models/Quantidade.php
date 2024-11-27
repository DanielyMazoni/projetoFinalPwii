<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Receita;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class Quantidade extends Model
{
    use HasFactory;

    public function receita()
    {
        return $this->hasOne(Receita::class, 'id', 'receita_id');
    }

    public function items()
    {
        // aqui estamos falando que um pedido tem muitos produtos e ai ele usa a tabela intermediaria
        return $this->belongsToMany(Produto::class, 'receita_produtos')->withPivot('qntd', 'created_at');
    }


    

}
