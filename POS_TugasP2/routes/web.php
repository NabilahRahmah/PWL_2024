<?php

use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [HomeController::class, 'index']);

// Route::prefix('category')->group(function () {
//     Route::get('food-beverage', [ProductController::class, 'foodBeverage']);
//     Route::get('beauty-health', [ProductController::class, 'beautyHealth']);
//     Route::get('home-care', [ProductController::class, 'homeCare']);
//     Route::get('baby-kid', [ProductController::class, 'babyKid']);
// });

// Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

// Route::get('/sale', [SaleController::class, 'sale']);


//JOBSHEET 3 PRAKTIKUM 6
Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);


//JOBSHEET 3 PRAKTIKUM 5
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);


// JOBSHEET 3 PRAKTIKUM 4
// Route::get('/', function () {
    return view('welcome');
// });

// Route::get('/level', [LevelController::class, 'index']);


// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::prefix('ViewProduct')->group(function() {
//     Route::get('/', [ProductController::class, 'index'])->name('ViewProduct');
//     Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage'])->name('food-beverage');
//     Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth'])->name('beauty-health');
//     Route::get('/category/home-care', [ProductController::class, 'homeCare'])->name('home-care');
//     Route::get('/category/baby-kid', [ProductController::class, 'babyKid'])->name('baby-kid');
// });

// Route::get('/ViewUser/{id}/name/{name}', [UserController::class, 'cust'])->name('cust');

// Route::get('/ViewSales', [SalesController::class, 'index'])->name('index');