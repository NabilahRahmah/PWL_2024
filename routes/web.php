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
    return 'welcome1';
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM: 2241760013<br>Nama: Nabilah Rahmah';
});

Route::get('/user/{name}', function ($name) {
    return "Nabilah Rahmah" . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
return 'Pos ke-13'.$postId." Komentar ke-3".$commentId;
});

Route::get( '/articles/{id}', function ($id) {
    echo "Halaman Artikel dengan ID 13" . $id;
});

Route::get('/user/{name?}', function ($name = null) {
    return "Nabilah Rahmah" . $name;
});

Route::get('/user/{name?}', function ($name='John') {
    return "Nabilah Rahmah" . $name;
});