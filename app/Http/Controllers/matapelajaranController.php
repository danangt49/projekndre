<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class matapelajaranController extends Controller
{
    public function add()
    {
        $input= new matapelajaran();
        return view('matapelajaran', compact('matapelajaran'));
    }
    public function data()
    {
        $input = matapelajaran::all();

        return view('matapelajaran', compact('matapelajaran'));
    }
}
