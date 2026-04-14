<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // define colum apa saja yang ada dan harus berinteraksi langsung dengan aplikasi.

    protected $fillable = [
        'name', 'brand', 'stock', 'tersedia', 'desc'
    ];
}
