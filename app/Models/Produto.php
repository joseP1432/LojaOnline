<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fornecedor;
use App\Models\Venda;

class Produto extends Model
{
	use HasFactory;

	public function vendas()
    {
    	return $this->hasMany(Venda::class);

    }
    protected $table = 'produtos';
	protected $fillable = ['PRO_NOME', 'PRO_STATUS','PRO_DESCRICAO','PRO_PRECOCOMPRA','PRO_PRECOVENDA','PRO_QUANTIDADE','PRO_FOR_CODIGO'];

	public function fornecedor(){
    	return $this->belongsTo(Fornecedor::class);

    }
}