<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function halamanPertama()
    {
        return "Ini adalah output dari controller index";
    }

    public function create()
    {
        return "Ini adalah output dari controller create barang";
    }
}
