<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{

    // define jika mau dihubungkan ke tabel singular
    protected $table = "barang";

    protected $fillable = [
        'nama',
        'merk',
        'stok',
        'tersedia',
        'deskripsi'
    ];
}
