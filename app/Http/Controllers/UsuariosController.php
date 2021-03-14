<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
   	public function usuarios(){
		$usr = \App\Models\Usuario::get();
		return view('usuario', compact('usr'));
	}

	public function cadusuario(){
		return view('cad-usuario');
	}

	public function storeusuario(Request $request){
		\App\Models\Usuario::create([
			'USU_EMAIL' => $request->email,
			'USU_SENHA' => $request->senha,
		]);
		return view('cad-usuario');
	}

	public function editusuario(){
		return view('edit-usuario');
	}
}
