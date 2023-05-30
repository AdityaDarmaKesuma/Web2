<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Buat fungsi index untuk menampilkan view form
    public function index()
    {
        return view('form');
    }

    //Buat fungsi hasil untuk menampilkan data input
    public function hasil(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'hobi' => 'required',
        ]);
        //udah diisi 4 inputan
        return view('hasil', ['data' => $request]);
    }
}
