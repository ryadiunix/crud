<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index(){
    	return view('hello');
    	//return view('demo');
    }
    public function baru(){
    return view('demo.demo');	
    }
}
