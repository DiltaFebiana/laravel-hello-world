<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUs(){
        echo '<h1> Tentang kami <br>';
        echo '<h2> Sejarah Educa Studio <br>';
        echo 'It was started by two PC game products, they were Marbel and Shoot Empire (as the first winner of Game <br> 
        Competition 2008). Later on, the founder decided to take it more professional by establishing Educa Studio on 1st April 2012.<br>
        At that moment, we only focused on Edu PC Games. Later, in 2012, we plunged into Mobile Apps and Games. In 2013, <br>
        we expanded into broader mobile platforms such as Windows Phone and Apple Store (iOS). We have a lot of sucessul IP such as Marbel for Educational Games for Kids, <br>
        Riri for Interactive Story Books, Kabi for Moslem Kids, Kolak for Interactive Kids Song. In 2017, its amazing year we have a lot of platform to build quality content and expanding <br>
        our company into merchandising, board games, interactive animation and teacher platform.<br>';
    }
}
