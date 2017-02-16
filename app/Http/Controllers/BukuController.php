<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    public function index(){
 	$buku = Buku::all();
 	//return dd($buku);
 //	$judul = "Pendddd judul buku"; 
 	    	return view('demo.index', compact ('buku', 'judul'));
    	}

    public function store(Request $request){
    	 // return $request->all();

  Buku::create($request->all());
  return back();
/*
          $buku = new Buku();

        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->save();
        */
    }
    public function edit($id){
        $buku = Buku::find($id);
        return view('demo.edit',compact('buku'));
    }
         public function update(Request $request, $id){
        Buku::find($id)->update($request->all());
        return redirect('/buku');
    }  
    public function destroy($id){
        Buku::find($id)->delete();
        return redirect('/buku');
    }
}
/*$buku = [
    		"judul" => "Buku 1",
    		"penulis" => "Anwar",
    		"tahun" => "2017"
    	];
    	$judul = "Pendddd judul buku";
    	return view('demo.index', compact ('buku', 'judul'));
    */