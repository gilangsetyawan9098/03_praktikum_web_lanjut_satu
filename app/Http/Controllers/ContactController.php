<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        return view('contact-us')
        ->with('name','Gilang Setyawan')
        ->with('wa','0812345678');
    }
}
