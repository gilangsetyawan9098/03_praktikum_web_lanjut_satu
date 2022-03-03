<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function article($id){
        echo "Halaman artikel dengan id $id";
    }

    public function news(){
        return view ('news')
            ->with('berita','Covid-19')
            ->with ('url', 'https://covid19.go.id/');
    }

    public function newsString($string){
        return view ('news')
            ->with('berita','Covid-19')
            ->with ('url', 'https://covid19.go.id/' . $string);
    }
}
