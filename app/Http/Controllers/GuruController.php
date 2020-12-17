<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function index(){
        return view('guruhome');
    }

    public function materi(){
        $materi = DB::table('materi')->get();
        return view('gurumateri',['materi' => $materi]);
    
    }

    public function tambahmateri(){
        
        return view('gurutambahmateri');
    }

    public function absensi(){
        $absen = DB::table('absen')->get();
        return view('guruabsensi',['absen' => $absen]);

    }

    public function storemateri(Request $request){
        DB::table('materi')->insert([
            'materi_nama' => $request->materi_nama,
            'materi_deskripsi' => $request->materi_deskripsi,
            'materi_slide' => $request->materi_slide,
            'materi_quiz' => $request->materi_quiz
            ]);
          $materi = DB::table('materi')->get();
        return redirect('guru/materi');
    }
}
