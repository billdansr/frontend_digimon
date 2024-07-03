<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    protected $fillable = [
        'judul',
        'gambar',
        'jenis',
        'deskripsi',
        'tanggal',
        // '_token',
    ];
    
}
