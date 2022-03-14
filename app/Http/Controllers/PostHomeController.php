<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostHomeController extends Controller
{
    public function index(){

    return view('Home', ['homes' => Home::index()]); 
}
}
