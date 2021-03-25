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

	public function showfornecedores($id){
		$fornecedor = \App\Models\Fornecedor::findOrFail($id);
		return view('showfornecedores', ['fornecedores' => $fornecedor]);
	}
	
	public function editfornecedor($id){
		$fornecedor = \App\Models\Fornecedor::findOrFail($id);
		return view('edit-fornecedor', ['fornecedores' => $fornecedor]);
	}
	public function atualizar(Request $request, $id){
		$fornecedor = \App\Models\Fornecedor::findOrFail($id);
		$fornecedor->update([
			'FOR_NOME'=>$request->nome,
		]);
		return redirect()->route('fornecedor');
	}

	public function destroy($id){
		$fornecedor = \App\Models\Fornecedor::findOrFail($id);
		$fornecedor->delete();
		return redirect()->route('fornecedor');
	}
}
