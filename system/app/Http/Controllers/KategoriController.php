<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    function index(){
    	$data['list_kategori'] = kategori::all();
    	return view('admin.kategori.index', $data);
    }

    function create(){
		return view('admin.kategori.create');
	}

	function store(){
		$data = new Kategori;
		$data->nama = request('nama');
		$data->deskripsi = request('deskripsi');
		$data->save();

		return redirect('admin/kategori')->with('success','Data Berhasil Ditambahkan');
	}

	function show(Kategori $kategori){
		$data['kategori'] = $kategori;
		return view('admin.kategori.show', $data);
	}

	function edit(Kategori $kategori){
		$data['kategori'] = $kategori;
		return view('admin.kategori.edit', $data);
	}

	function update(Kategori $kategori){
		$kategori->nama = request('nama');
		$kategori->deskripsi = request('deskripsi');
		$kategori->save();

		return redirect('admin/kategori')->with('success','Data Berhasil Diubah');
	}

	function destroy(Kategori $kategori){
		$kategori->delete();
		return redirect('admin/kategori')->with('danger','Data Berhasil Dihapus');
	}
}
