<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
   
    public function news($mynews){
        echo "Berita hari ini adalah " .$mynews;
    }
}
