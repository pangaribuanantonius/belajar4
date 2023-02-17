<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){


        //$pegawai = \App\Models\Pegawai::where('nama', 'LIKE', '%kicky%')->get(); //menampillkan select pegawai
        $pegawai = \App\Models\Pegawai::all(); //menampilkan semua pegawai
        return view('pegawai.index', ['pegawai' => $pegawai]); //return pegawai yang diseleksi
        //return($pegawai); //return seluruh pegawai
    }

    public function create(){

        //$pegawai = \App\Models\Pegawai::where('nama', 'LIKE', '%kicky%')->get(); //menampillkan select pegawai
        //$pegawai = \App\Models\Pegawai::all(); //menampilkan semua pegawai
        //return view('pegawai', ['pegawai2' => $pegawai]); //return pegawai yang diseleksi
        //return($pegawai); //return seluruh pegawai

        return view('pegawai.create');
    }

    public function edit(Pegawai $pegawai){

        return view('pegawai.edit', ['pegawai' => $pegawai]);

        /*return view('editpegawai',compact('peg'));*/
    }


    public function store(Request $request){

        //insert pegawai
        /*\DB::table('pegawai')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'level' => $request->level
        ]);*/

         \App\Models\Pegawai::create([
            'id' => \Str::random(8),
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'level' => $request->level
            ]);
        //Alert::success('Congrats', 'You\'ve Successful');
        return redirect('pegawai/index');

        //$pegawai = \App\Models\Pegawai::where('nama', 'LIKE', '%kicky%')->get(); //menampillkan select pegawai
        //$pegawai = \App\Models\Pegawai::all(); //menampilkan semua pegawai
        //return view('pegawai', ['pegawai2' => $pegawai]); //return pegawai yang diseleksi
        //return($pegawai); //return seluruh pegawai

       /* return "test";*/
    }


    public function update(Request $request, Pegawai $pegawai){

        //insert pegawai
        /*\DB::table('pegawai')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'level' => $request->level
        ]);*/

         $pegawai->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'level' => $request->level
            ]);
        return redirect('pegawai/index');

        //$pegawai = \App\Models\Pegawai::where('nama', 'LIKE', '%kicky%')->get(); //menampillkan select pegawai
        //$pegawai = \App\Models\Pegawai::all(); //menampilkan semua pegawai
        //return view('pegawai', ['pegawai2' => $pegawai]); //return pegawai yang diseleksi
        //return($pegawai); //return seluruh pegawai

       /* return "test";*/
    }


     public function destroy(Request $request, Pegawai $pegawai){

        //insert pegawai
        /*\DB::table('pegawai')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'level' => $request->level
        ]);*/

        Pegawai::destroy($pegawai->id);
        return redirect('pegawai/index');

        //$pegawai = \App\Models\Pegawai::where('nama', 'LIKE', '%kicky%')->get(); //menampillkan select pegawai
        //$pegawai = \App\Models\Pegawai::all(); //menampilkan semua pegawai
        //return view('pegawai', ['pegawai2' => $pegawai]); //return pegawai yang diseleksi
        //return($pegawai); //return seluruh pegawai

       /* return "test";*/
    }



}
