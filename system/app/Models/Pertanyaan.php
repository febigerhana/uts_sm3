<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Jawaban;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $table = 'pertanyaan';

    function kategori(){
      return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    function user(){
      return $this->belongsTo(User::class, 'id_user');
    }

    function jawaban(){
      return $this->hasMany(Jawaban::class, 'id_pertanyaan');
    }
}
