<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class class1Controller extends Controller
{
    public function data()
    {
        $class1 = class1::all();

        return view('class', compact('class1'));
    }
}
