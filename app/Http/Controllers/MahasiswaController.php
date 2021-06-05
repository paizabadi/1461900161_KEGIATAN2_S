<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index()
    {
        $mahasiswa = \App\Models\Mahasiswa::All();
        return view('mahasiswa' , ['mahasiswa' => $mahasiswa]);
        
    }


    public function tambah()
    {
        return view('tambah0161');
    }

    public function edit($id)
    {
        $mahasiswa = DB::class('mahasiswa')->where('id',$id)->get();
        return view('edit0161',['mahasiswa' => $mahasiswa]);
    }

   
    public function hapus($id)
    {
        DB::class('mahasiswa')->where('id',$id)->delete();
        return redirect('/mahasiswa');
    }

    public function cari(Request $request)
    {
        $cari=$request->lihat;
        $mahasiswa=DB::class('mahasiswa')->where('nama','like',"%".$cari."%")->paginate();
        return view('index0161',['mahasiswa' => $mahasiswa]);

    }
}
