<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  echo 'Selamat Datang';
});

Route::get('/about', function () {
    echo ('NIM  : 2041720136 <br>');
    echo ('Nama : Dilta Febiana');
});

Route::get('/article/{id}', function ($id='1') {
 echo ('Halaman artikel ini dengan id '.$id);
});


Route::get('/', [App\Http\Controllers\PageController::class, 'index']); 

Route::get('/about', [App\Http\Controllers\PageController::class, 'about']); 

Route::get('/article/{$id}', [App\Http\Controllers\PageController::class, 'article']); 


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']); 

Route::get('/about', [App\Http\Controllers\AboutController::class, 'about']); 

Route::get('/article/{id}', [App\Http\Controllers\ArticleController::class, 'article']); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']); 

Route::group(['prefix'=>'/category'], function () {
    Route::get('/marbel-educationalgames', function(){
        echo 'Marbel Premium <br>';
        echo 'Marbel Piano <br>';
        echo 'Marbel Juz Amma';
    });
    Route::get('/marbel-and-friends-kids-games', function(){
        echo 'Marbel Fun Number <br>';
        echo 'Marbel Polisi <br>';
        echo 'Marbel Perawat Hewan Lucu <br>';
        echo 'Marbel Pengasuh anak <br>';
        echo 'Marbel Pengasuh Anak 2';
    }); 
    Route::get('/marbel-Riry-Story-Books', function(){
        echo 'Kisah Keledai yang dungu <br>';
        echo 'Kisah kerbau kancil dan ular <br>';
        echo 'Landak dan Ular';
    });
});

Route::get('/news', [App\Http\Controllers\NewsController::class, 'news']); 


Route::get('/program', [App\Http\Controllers\NewsController::class, 'program']); 
Route::group(['prefix'=>'/program'], function () {
Route::get('/karir', function(){
    echo 'Ilustrator <br>';
    echo 'Digital Strategist <br>';
    echo 'Fronted Developer <br>';
    echo 'Pengembangan Kurikulum dan Program <br>';
    echo 'Customer Service';
});
Route::get('/magang', function(){
    echo 'Magang Teknis <br>
    Magang dalam bidang teknis seperti Design (Game design, Web/App design, UI/UX design), 
    Art & Illustration (Sketch, Storyboard, Character Dev, Game Assets Production, Animation Assets Production),<br> 
    3D Creation, Video & Animation, Audio Engineering, QA & Testing dan Programming (Game, Web, Apps).
    Kami mengalihkan semua proses pendaftaran, proses magang dan pelaporan melalui kerjasama dengan Game Lab Indonesia.<br> 
    Jadi jika ingin magang di Educa Studio yang berhubungan dengan hal-hal teknis seperti di atas, 
    maka silakan melakukan pendaftaran melalui situs https://www.gamelab.id <br>';

    echo 'Magang Non-Teknis <br>
    Magang non teknis meliputi Marketing (digital marketing, copywriting, content marketing, SEO, ASO, growth hacking, <br>
    dan lain-lain), Business Development (partnership dan lain-lain), Keuangan (finance, accounting, etc), Public Relation, <br>
     Sekretaris, Administrasi Bisnis dan PGSD (keguruan).
    Untuk magang non teknis seperti di atas, silakan melakukan apply melalui email cs@educastudio.com dengan Subject “[Internship] Nama Program“. <br>
    Contohnya “[internship] Public Relation”. Sertakan CV lengkap, durasi magang, motivasi magang dan profil institusi (kampus dan smk). <br>';
});
Route::get('/kunjungan-industri', function(){
    echo 'Kunjungan Industri: Tanggungjawab dan Tugas Seorang Programmer <br>';
    echo 'Kunjungan Industri : Game, Animasi, dan Industri Kreatif <br>';
    echo 'Kunjungan Industri :Mengintip Dapur Kreatif Educa Studio <br>';
    echo 'Kunjungan Industri SMK N 1 Talangpadang Lampung <br>';
    echo 'Educa Studio Mendapatkan Kunjungan Industri dari PPA Anugrah Kudus';
});
});

Route::get('/about-us', [App\Http\Controllers\AboutUsController::class, 'aboutUs']); 



   
