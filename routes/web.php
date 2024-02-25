<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat datang';
});

Route::get('/about', function () {
    return 'Asyifa Nurfadilah/2241720257';
});

Route::get('/user/{Asyifa}', function ($name) {
    return 'Nama saya '.$name;
    });

Route::get('/posts/{halo}/comments/{world}', function
    ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});    

Route::get('/user/{name?}', function ($name='Asyifa') {
    return 'Nama saya '.$name;
    });

    

    