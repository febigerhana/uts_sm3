<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\Kategori;

class PertanyaanController extends Controller
{
    function index(){
    	$id_user = request()->user()->id;
		$data['list_pertanyaan'] = Pertanyaan::where('id_user', $id_user)->get();
    	return view('admin.pertanyaan.index', $data);
    }

    function create(){
    	$data['list_kategori'] = Kategori::all();
		return view('admin.pertanyaan.create', $data);
	}

	function store(){
		$data = new pertanyaan;
		$data->id_user = request()->user()->id;
		$data->id_kategori = request('id_kategori');
		$data->judul = request('judul');
		$data->pertanyaan = request('pertanyaan');
		$data->save();

		return redirect('admin/pertanyaan')->with('success','Data Berhasil Ditambahkan');
		//dd(request()->all());
	}

	function show(Pertanyaan $pertanyaan){
		$data['pertanyaan'] = $pertanyaan;
		return view('admin.pertanyaan.show', $data);
	}

	function edit(Pertanyaan $pertanyaan){
		$data['pertanyaan'] = $pertanyaan;
		return view('admin.pertanyaan.edit', $data);
	}

	function update(Pertanyaan $pertanyaan){
		$pertanyaan->judul = request('judul');
		$pertanyaan->pertanyaan = request('pertanyaan');
		$pertanyaan->save();

		return redirect('admin/pertanyaan')->with('success','Data Berhasil Diubah');
	}

	function destroy(Pertanyaan $pertanyaan){
		$pertanyaan->delete();
		return redirect('admin/pertanyaan')->with('danger','Data Berhasil Dihapus');
	}
}
