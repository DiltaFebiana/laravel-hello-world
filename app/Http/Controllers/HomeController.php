<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        echo "<h1> DINAS PERTANIAN KOTA MALANG <br>";
        echo "<h2> Welcome to the official website of the Malang City Agriculture Service";
    }
}
