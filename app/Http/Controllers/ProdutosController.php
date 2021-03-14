<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
   	public function produtos(){
		$pro = \App\Models\Produto::get();
		return view('produto', compact('pro'));
	}

	public function cadproduto(){
		return view('cad-produto');
	}

	public function storeproduto(Request $request){
		\App\Models\Produto::create([
			'PRO_NOME' => $request->nome,
			'PRO_DESCRICAO' => $request->desc,
			'PRO_PRECOCOMPRA' => $request->pcompra,
			'PRO_PRECOVENDA' => $request->pvenda,
			'PRO_QUANTIDADE' => $request->qntd,
			'PRO_FOR_CODIGO' => $request->for,
		]);
		return view('cad-produto');
	}

	public function editproduto(){
		return view('edit-produto');
	}
}
