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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::view('/home', 'home')->name('home');

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ControllerProduct;

// Route::get('/', [HomeController::class, 'home']);
Route::get('/product', [ControllerProduct::class, 'index']);
Route::get('/product/{productCode}', [ControllerProduct::class, 'show'])->name('product.details');
