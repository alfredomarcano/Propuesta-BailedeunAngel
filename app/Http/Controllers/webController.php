<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    //
	public function inicio(){
		return view('template.index');
	}

    public function producto(){
		return view('template.producto');
	}

	public function nosotros(){
		return view('template.nosotros');
	}

	public function unirte(){
		return view('template.unirte');
	}

	public function contacto(){
		return view('template.contacto');
	}

	public function Carrito(){
		return view('template.carrito');
	}

	public function Pagar(){
		return view('template.pagar');
	}
}
