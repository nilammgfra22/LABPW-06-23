<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\loginController;

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



// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get([loginController::class,'halamanLogin']);
// Route::post([loginController::class,'authenticate']);

Route::get('/halamanLesson', function () {
    return view('halamanLesson');
});

Route::get('/halamanCatalog', function () {
    return view('halamanCatalog');
});

Route::get('/profilPengguna', function () {
    return view('profilPengguna');
});

Route::get('/halamanHome', function(){
    return view('halamanHome');
});

Route::get('/', function () {
    return view('halamanLogin');
});
