<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Pertanyaan;
use App\Models\Jawaban;


class HomeController extends Controller
{
    function index(){
    	$data['list_kategori'] = Kategori::all();
    	return view('index', $data);
    }

    function kategori(){
        $data['list_kategori'] = Kategori::all();
        return view('kategori', $data);
    }

    function pertanyaan(){
        $data['list_kategori'] = Kategori::all();
        $data['list_pertanyaan'] = Pertanyaan::all();
    	return view('pertanyaan', $data);
    }

    function kontak(){
        $data['list_kategori'] = Kategori::all();
        return view('kontak', $data);
    }

    function jawaban(){
        $data['list_kategori'] = Kategori::all();
        $data['list_pertanyaan'] = Pertanyaan::all();
    	return view('jawaban', $data);
    }

    function detailpertanyaan(Pertanyaan $pertanyaan){
        $data['detail_pertanyaan'] = $pertanyaan;
        return view('detailPertanyaan', $data);
    }

    function carijawaban(){
        $jawaban = request('jawaban');
        $data['list_jawaban'] = Jawaban::where('jawaban', 'like', "%$jawaban%")->get();
        return view('carijawaban', $data);
    }

    function caripertanyaan(){
        $pertanyaan = request('pertanyaan');
        $data['list_pertanyaan'] = Pertanyaan::where('judul', 'like', "%$pertanyaan%")->get();
        return view('caripertanyaan', $data);
    }
}
