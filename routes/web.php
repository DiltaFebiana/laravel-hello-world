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
Route::group(['prefix'=>'/program'], function () {
    Route::get('/karir', function(){
        echo 'Ilustrator <br>';
        echo 'Trainer Bisnis dan Pemasaran <br>';
        echo 'Fronted Developer <br>';
    });
    Route::get('/magang', function(){
        echo 'Magang Teknis <br>';
        echo 'Magang Non-Teknis <br>';
    });
    Route::get('/kunjungan-industri', function(){
        echo 'Kunjungan Industri: Tanggungjawab dan Tugas Seorang Programmer <br>';
        echo 'Kunjungan Industri : Game, Animasi, dan Industri Kreatif';
    });
});


   
