<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

class Fornecedor extends Model
{
	use HasFactory;
	public function produto()
    {
    	return $this->hasMany(Produto::class);

    }
    protected $table = 'fornecedors';
	protected $fillable = ['FOR_CODIGO','FOR_NOME'];
}
