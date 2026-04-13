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
        // langkah jika mau mengirimkan data, harus di validasi dulu. 
        $request->validate([
            'nama' => ['required', 'string', 'min:3', 'max:50'],
            'umur' => ['required', 'integer', 'min:1', 'max:100'],
        ], [
            'nama.min' => 'Nama harus 3 karakter.',
            'nama.max' => 'Nama harus maksimal 100 karakter.', 
            'nama.required' => 'nama harus diisi',

            'umur.min' => 'Nama harus 3 karakter.',
            'umur.max' => 'Nama harus maksimal 100 karakter.', 
            'umur.required' => 'nama harus diisi',
            'umur.integer' => 'Umur harus angka'
        ]);

        // session
        $request->session()->put('umur', $request->umur); //umur yang dimasukan di form

        // put agar data nilai bisa dikirimkan ulang ke routing selanjutnya.

        // jika data sudah diterima, langkah selanjutnya adalah kita harus ke halaman sukses.

        return redirect()->route('umur.success');

    }
}
