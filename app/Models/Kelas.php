<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mhs;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas'; //menambahkan bahwa model ini terkait dengan tabel kelas 

    public function mahasiswa(){
        return $this->hasMany(Mhs::class);
    }
}