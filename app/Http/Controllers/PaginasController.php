<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function inicio(){
		
		return view ("welcome");
	}
	
	 public function quienesSomos(){
		
		return view ("quienesSomos");
	}
	
	 public function dondeEstamos(){
		
		return view ("dondeEstamos");
	}
	
	 public function foro(){
		
		return view ("foro");
	}
}
