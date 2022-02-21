<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "NIM   : 2041720136 <br>";
        echo "Nama  : Dilta Febiana";
    }

    public function article($id='1'){
        echo "Halaman artikel dengan id ".$id;
    }
}
