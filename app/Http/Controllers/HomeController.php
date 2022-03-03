<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('home')
        ->with('name','Gilang Setyawan')
        ->with('nim','2041720059');
    }
}