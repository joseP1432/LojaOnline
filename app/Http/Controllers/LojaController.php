<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaController extends Controller
{
	public function index(){
		return view('dashboard');
	}

	public function login(){
		return view('login');
	}

}
