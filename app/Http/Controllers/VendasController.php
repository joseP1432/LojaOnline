<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Produto;
use Illuminate\Support\Facades\Gate;
use App\Providers\RouteServiceProvider;

class VendasController extends Controller
{

    public function __construct() {
        $this->middleware(['auth']);
    }

	public function vendas(){
		$vendas = Venda::all();
		$prod = Produto::all();
		return view('venda')->with('vendas', $vendas)->with('prod', $prod);
	}

	public function cadvenda(){
		$produtos = Produto::all();
		return view('cad-venda')->with('produto', $produtos);
	}

	public function storevenda(Request $request){
		\App\Models\Venda::create([
			'VEN_QUANTIDADE' => $request->qntd,
			'VEN_CLIENTE' => $request->cliente,
			'VEN_STATUS' => $request->status,
			'VEN_DATA' => $request->data,
			'VEN_PRO_CODIGO' => $request->prod,
		]);
		return redirect()->route('cad-venda');
	}

	public function showvendas($id){
		$venda = \App\Models\Venda::findOrFail($id);
		return view('showvendas', ['vendas' => $venda]);
	}


	public function editvenda($id){
		$venda = \App\Models\Venda::findOrFail($id);
		$produto = Produto::all();
		return view('edit-venda', ['vendas' => $venda])->with('produto', $produto);
	}

	public function atualizar(Request $request, $id){
		$venda = \App\Models\Venda::findOrFail($id);
		$venda->update([
			'VEN_QUANTIDADE' => $request->qntd,
			'VEN_PRO_CODIGO' => $request->prod,
			'VEN_STATUS' => $request->status,
			'VEN_DATA' => $request->data,
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
