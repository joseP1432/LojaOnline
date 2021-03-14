<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendasController extends Controller
{
	public function vendas(){
		$ven = \App\Models\Venda::get();
		$pro = \App\Models\Produto::get();
		return view('venda', compact('ven', 'pro'));
	}

	public function cadvenda(){
		return view('cad-venda');
	}

	public function storevenda(Request $request){
		\App\Models\Venda::create([
			'VEN_QUANTIDADE' => $request->qntd,
			'VEN_PRO_CODIGO' => $request->prod,
		]);
		return view('cad-venda');
	}

	public function editvenda(){
		return view('edit-venda');
	}
}
