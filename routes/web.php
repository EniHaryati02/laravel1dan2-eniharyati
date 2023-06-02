<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/home', function () {
//     return 'semangat sebentar lagi selesai';
// });

// Route::redirect('/nama', 'home');

Route::fallback(function(){
    return 'halaman kosong';
});

// Route::get('/items/{brand}', function($merk) {
//     return $merk;
// });

// Route::get('/conflict/{nama}', function($namaItem){
//     return 'Nama Barang : '.$namaItem; 
// });



//Pert 23 view
Route::get('/product', [ProductController::class, 'index']);

Route::get('/productlist', [ProductController::class, 'index']);

//Tugas Pert 23 view

Route::get('/landing', [Controller::class, 'index']);

Route::get('/dashboard', [Controller::class, 'index2']);

//Tugas 25
Route::get('/landing', [LandingController::class, 'index']);
Route::get('/landing', [productController::class, 'index2']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);