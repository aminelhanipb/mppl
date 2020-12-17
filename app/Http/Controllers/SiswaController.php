<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    public function index(){
        return view('siswahome');
    }

    public function materi(){
        $materi = DB::table('materi')->get();
        return view('siswamateri',['materi' => $materi]);
    }

    public function absensi(){
        return view('siswaabsensi');
    }

    public function storeabsensi(Request $request){
        DB::table('absen')->insert([
            'id' => '2',
            'pertemuan' => $request->pertemuan
        ]);
        return redirect('siswaabsensi');
    }
}
