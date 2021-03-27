<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

class Venda extends Model
{
    use HasFactory;

    protected $table = 'vendas';
    protected $fillable = ['VEN_QUANTIDADE','VEN_DATA', 'VEN_CLIENTE', 'VEN_STATUS','VEN_PRO_CODIGO'];

    public function produto(){
    	return $this->belongsTo(Produto::class);

    }
}

  
