<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrecoController extends Controller
{
    public function index(){
        return view('index');
    }

    public function form(){
        return view('inserir');
    }

    public function teste(Request $request){

    	$a = $request->all();

    	if (isset($request->check)) {
    		$a = $request->check;
    	}

    	dd($a);
    }
}
