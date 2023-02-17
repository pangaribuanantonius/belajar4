<?php

namespace App\Http\Controllers;

use App\Models\PinjamanBuku;
use Illuminate\Http\Request;

class Pinjaman_bukuController extends Controller
{
    public function index(){
        $pinjaman_buku = \App\Models\PinjamanBuku::all();
        return view('pinjaman_buku.index', ['pinjaman_buku' => $pinjaman_buku]);
    }
    public function create(){
        $listPegawai = \App\Models\Pegawai::all();
        $listBuku = \App\Models\Buku::all();
        return view('pinjaman_buku.create', ['listPegawai' => $listPegawai, 'listBuku' => $listBuku]);
    }
    public function store(Request $request){
        $datasudahvalidasi = $request->validate([
            'pegawai_id' => 'required',
            'buku_id' => 'required',
        ]);

        //insert pegawai
        /*\DB::table('pegawai')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'level' => $request->level
        ]);*/

         \App\Models\PinjamanBuku::create([
            'id' => \Str::random(8),
            'pegawai_id' => $request->pegawai_id,
            'buku_id' => $request->buku_id,
            ]);
        //Alert::success('Congrats', 'You\'ve Successful');
        return redirect('pinjaman_buku/index');

        //$pegawai = \App\Models\Pegawai::where('nama', 'LIKE', '%kicky%')->get(); //menampillkan select pegawai
        //$pegawai = \App\Models\Pegawai::all(); //menampilkan semua pegawai
        //return view('pegawai', ['pegawai2' => $pegawai]); //return pegawai yang diseleksi
        //return($pegawai); //return seluruh pegawai

       /* return "test";*/
    }
    public function edit(PinjamanBuku $pinjaman_buku){
        $listPegawai = \App\Models\Pegawai::all();
        $listBuku = \App\Models\Buku::all();
        return view('pinjaman_buku.edit', [
            'listPegawai' => $listPegawai, 
            'listBuku' => $listBuku, 
            'pinjaman_buku' => $pinjaman_buku
        ]);

    }
    public function update(Request $request, PinjamanBuku $pinjaman_buku){

        //insert pegawai
        /*\DB::table('pegawai')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'level' => $request->level
        ]);*/

         $pinjaman_buku->update([
            'pegawai_id' => $request->pegawai_id,
            'buku_id' => $request->buku_id
            ]);
        return redirect('pinjaman_buku/index');

        //$pegawai = \App\Models\Pegawai::where('nama', 'LIKE', '%kicky%')->get(); //menampillkan select pegawai
        //$pegawai = \App\Models\Pegawai::all(); //menampilkan semua pegawai
        //return view('pegawai', ['pegawai2' => $pegawai]); //return pegawai yang diseleksi
        //return($pegawai); //return seluruh pegawai

       /* return "test";*/
    }
    public function destroy(Request $request, PinjamanBuku $pinjaman_buku){

        PinjamanBuku::destroy($pinjaman_buku->id);
        return redirect('pinjaman_buku/index');
    }

}
