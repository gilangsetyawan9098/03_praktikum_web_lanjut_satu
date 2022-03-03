<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function java(){
        return view('program')
        ->with('program','java');
    }
    public function python(){
        return view('program')
        ->with('program','python');
    }
    public function cc(){
        return view('program')
        ->with('program','C++');
    }
}
