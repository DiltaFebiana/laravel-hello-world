<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($id='1'){
        echo "Halaman artikel dengan id ".$id;
    }
}
