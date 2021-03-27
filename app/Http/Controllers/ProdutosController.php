<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
use App\Models\Produto;

class ProdutosController extends Controller
{

   	public function produtos(){
		$pro = Produto::all();
		$for = Fornecedor::all();
		return view('produto')->with('pro', $pro)->with('for', $for);
	}

	public function cadproduto(){
		$for = Fornecedor::all();
		return view('cad-produto')->with('for', $for);
	}

	public function storeproduto(Request $request){
		\App\Models\Produto::create([
			'PRO_NOME' => $request->nome,
			'PRO_DESCRICAO' => $request->desc,
			'PRO_PRECOCOMPRA' => $request->pcompra,
			'PRO_STATUS' => $request->status,
			'PRO_PRECOVENDA' => $request->pvenda,
			'PRO_QUANTIDADE' => $request->qntd,
			'PRO_FOR_CODIGO' => $request->for,
		]);
		return redirect()->route('cad-produto');
	}

	public function showprodutos($id){
		$produto = \App\Models\Produto::findOrFail($id);
		return view('showprodutos', ['produtos' => $produto]);
	}


	public function editproduto($id) {
		$produto = \App\Models\Produto::findOrFail($id);
		$fornecedor = Fornecedor::all();
		return view('edit-produto', ['produtos' => $produto])->with('fornecedor', $fornecedor);
	}

	public function atualizar(Request $request, $id)
	{
		$produto = \App\Models\Produto::findOrFail($id);
		$produto->update([
			'PRO_NOME' => $request->nome,
			'PRO_DESCRICAO'=> $request->desc,
			'PRO_PRECOCOMPRA'=> $request->pcompra,
			'PRO_PRECOVENDA'=> $request->pvenda,
			'PRO_QUANTIDADE'=> $request->qntd,
			'PRO_FOR_CODIGO' => $request->for,
			'PRO_STATUS' => $request->status,
		]);
		return redirect()->route('produto');
	}

	public function destroy($id){
		$produto = \App\Models\Produto::findOrFail($id);
		$produto->delete();
		return redirect()->route('produto');
	}
}
