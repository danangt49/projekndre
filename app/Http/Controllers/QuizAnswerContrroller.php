<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizAnswerContrroller extends Controller
{

    public function add()
    {
        $input= new Quiz();
        return view('Quiz', compact('Quiz'));
    }
    public function store(Request $request)
    {   
       
        $input= new Quiz();
        $input->input_nim=$request->input_nim;
        $input->input_nama=$request->input_nama;
        $input->jk=$request->jk;
        $input->input_no=$request->input_no;
        if($input->save()){
            return redirect()->to('Quiz') ;
        }else{
            return view('Quiz');
        }
    }
   
}