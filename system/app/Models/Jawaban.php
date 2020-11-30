<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pertanyaan;
use App\Models\User;

class Jawaban extends Model
{
    use HasFactory;
    protected $table = 'jawaban';

    function pertanyaan(){
   		return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan');
   	}

   	function user(){
   		return $this->belongsTo(User::class, 'id_user');
   	}

}
