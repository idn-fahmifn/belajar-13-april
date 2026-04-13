<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function form()
    {
        return view('umur.form');
    }

    public function success()
    {
        return view('umur.success');
    }

    // dihubungkan ke method post, wajib ada parameter untuk menerima data dari request
    public function send(Request $request)
    {
        // agar data bisa dibaca di dalam scope ini.

        return $request;
    }
}
