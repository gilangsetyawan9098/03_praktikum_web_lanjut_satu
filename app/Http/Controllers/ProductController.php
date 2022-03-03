<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function pensil(){
        return view ('product')
            ->with ('page', 'Pensil 2B Faber Castell')
            ->with ('url', 'https://id-test-11.slatic.net/p/05d39e58b95feb48e3d41b1ce44a815c.png');
    }

    public function penghapus(){
        return view ('product')
            ->with ('page', 'Penghapus Faber Castell')
            ->with ('url', 'https://images.tokopedia.net/img/cache/500-square/product-1/2018/7/25/28696139/28696139_8e6fcf97-3c8d-4c9f-9091-f826defda4f7_2048_2058');
    }

    public function penggaris(){
        return view ('product')
            ->with ('page', 'Penggaris Faber Castell')
            ->with ('url', 'https://cf.shopee.co.id/file/6f10cd256549e6e3e2ff09120c2d1097');
    }
}
