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
}
