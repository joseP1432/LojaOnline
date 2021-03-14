<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	use HasFactory;
	protected $fillable = ['PRO_CODIGO', 'PRO_NOME', 'PRO_DESCRICAO','PRO_PRECOCOMPRA','PRO_PRECOVENDA','PRO_QUANTIDADE','PRO_FOR_CODIGO'];
}
