<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa'; // paksa nama tabel
    protected $fillable = ['nama', 'jurusan', 'angkatan'];
}
