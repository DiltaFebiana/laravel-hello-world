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

Route::group(['prefix'=>'/products'], function () {
    Route::get('/marbel-educationalgames', function(){
        echo 'Marbel Premium <br>';
        echo 'Marbel Piano <br>';
        echo 'Marbel Juz Amma';
    });
});


   
