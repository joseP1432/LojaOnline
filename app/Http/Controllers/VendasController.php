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

	public function showvendas($id){
		$venda = \App\Models\Venda::findOrFail($id);
		return view('showvendas', ['vendas' => $venda]);
	}


	public function editvenda($id){
		$venda = \App\Models\Venda::findOrFail($id);
		return view('edit-venda', ['vendas' => $venda]);
	}

	public function atualizar(Request $request, $id){
		$venda = \App\Models\Venda::findOrFail($id);
		$venda->update([
			'VEN_QUANTIDADE' => $request->qntd,
			'VEN_PRO_CODIGO' => $request->prod,
		]);
		$ven = \App\Models\Venda::get();
		$prod = \App\Models\Produto::get();
		return redirect()->route('venda');
	}

		public function destroy($id){
		$venda = \App\Models\Venda::findOrFail($id);
		$venda->delete();
		return redirect()->route('venda');
	}
}
