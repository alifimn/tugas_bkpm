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
    return view('welcome');
});

Route::prefix('/hal')->group(function (){
Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "nama" => "Alif Imanullah Krisna",
        "jk" => "Laki - Laki",
        "email" => "e41211111@student.polije.ac.id"
    ]);
})->name('about');

Route::get('/hello/{name}', function ($name) {
    return "Hello, $name!";
});
});

Route::get('/named', function () {
    return view('testnamed');
});
