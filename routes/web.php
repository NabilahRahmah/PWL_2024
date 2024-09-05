<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

Route::get('/about', function () {
    return 'NIM: 2241760013<br>Nama: Nabilah Rahmah';
});

Route::get('/user/{name}', function ($name) {
    return "Nabilah Rahmah" . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-13'.$postId." Komentar ke-3".$commentId;
});

/*Route::get( '/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID 13" . $id;
});*/

Route::get('/user/{name?}', function ($name = null) {
    return "Nabilah Rahmah" . $name;
});

Route::get('/user/{name?}', function ($name='John') {
    return "Nabilah Rahmah" . $name;
});

// Praktikum 2
Route::get('/hello',[WelcomeController::class,'hello']);

//Modifikasi No 6
Route::get('/index',[WelcomeController::class,'index']);
Route::get('/about',[WelcomeController::class,'about']);
Route::get('/articles/{id}',[WelcomeController::class,'articles']);

//Modifikasi No 7
Route::get('/',HomeController::class);
Route::get('/about',[AboutController::class,'about']);
Route::get('/articles2/{id}',ArticlesController::class);

//Praktikum2 No11
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);

//Praktikum 3 No2
Route::get('/greeting', function () {
    return view('hello', ['name' => 'Nabila']);
});

//Praktikum 3 No9
Route::get('/greeting', [WelcomeController::class,'greeting']);