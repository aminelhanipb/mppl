<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImanController extends Controller
{
    public function index(){
		
	$nama = "amin elhan";

	$pelajaran = ["matkul1","matkul2","matkul3"];
	
	return view('blog',['nama' => $nama , 'matkul' => $pelajaran]);
}
	public function dumdum(){
		return view('welcome');
	}
	
	public function detdet($nama){
		return $nama;
	}

	public function formulir(){
		return view('formulir');
	}

	public function post (Request $request){
	$nama = $request->input('nama');
	$alamat = $request->input('alamat');
	return "Nama : ".$nama.", Alamat:".$alamat;
	}
}	
