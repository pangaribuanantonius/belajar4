<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;


class BukuController extends Controller
{
	public function index(){
		
		return view('buku.index', ['buku' => \App\Models\Buku::latest()->paginate(5)]);
	}
	public function create(){
		return view('buku.create');
	}
	public function store(Request $request){
		$datasudahvalidasi = $request->validate([
			'image' => 'file|mimes:jpg,png,jpeg|max:1024',
		]);
		if ($request->hasFile('image')) {
			$extFile = $request->image->getClientOriginalExtension();
			$namaFile = time().".".$extFile;

			$request->image->move('konten/image', $namaFile);
			\App\Models\Buku::create([
				'id' => \Str::random(8),
				'namabuku' => $request->namabuku,
				'penerbit' => $request->penerbit,
				'image' => $namaFile,
			]);
		}else{
			\App\Models\Buku::create([
				'id' => \Str::random(8),
				'namabuku' => $request->namabuku,
				'penerbit' => $request->penerbit,
			]);
		}

		
        return redirect('buku/index')->with('flashdata', 'Berhasil');
	}
	public function edit(Buku $buku){
        return view('buku.edit', ['buku' => $buku]);
    }
    public function update(Request $request, Buku $buku){
    	$datasudahvalidasi = $request->validate([
			'image' => 'file|mimes:jpg,png,jpeg|max:1024',
		]);
		

		if ($request->hasFile('image')) {
			if ($buku->image!=='kosong.png') {
				unlink('konten/image/'.$buku->image);
			}
			
			$extFile = $request->image->getClientOriginalExtension();
			$namaFile = time().".".$extFile;
			$request->image->move('konten/image', $namaFile);
			$buku->update([
            'namabuku' => $request->namabuku,
            'penerbit' => $request->penerbit,
            'image' => $namaFile,
            ]);
		}else{
			$buku->update([
            'namabuku' => $request->namabuku,
            'penerbit' => $request->penerbit,
            ]);
		}
		return redirect('buku/index');        
    }
    public function destroy(Request $request, Buku $buku){
    	$buku::destroy($buku->id);
    	unlink('konten/image/'.$buku->image);
    	return redirect('buku/index');

    }
}