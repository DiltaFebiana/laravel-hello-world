<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        echo "<h1> Educa Studio <br>";
        echo "A Simple Fun Educational Tool <br>";
        echo "<h2> Marbel <br>";
        echo "Mari belajar sambil bermain";
    }
}
