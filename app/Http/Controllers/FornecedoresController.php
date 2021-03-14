<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
   	public function fornecedores(){
		$for = \App\Models\Fornecedor::get();
		return view('fornecedor', compact('for'));
	}
	public function cadfornecedor(){
		return view('cad-fornecedor');
	}

	public function storefornecedor(Request $request){
		\App\Models\Fornecedor::create([
			'FOR_NOME' => $request->nome,
		]);
		return view('cad-fornecedor');
	}

	public function editfornecedor(){
		return view('edit-fornecedor');
	}
}
