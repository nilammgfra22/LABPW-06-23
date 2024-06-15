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

use App\Http\Controllers\Controllerdpo;

// Route::get('/', [HomeController::class, 'home']);
Route::get('/dpo', [Controllerdpo::class, 'index'])->name("dpo");
Route::get('/dpo/{id}', [Controllerdpo::class, 'show'])->name('dpo.keterangan');


Route::get('/adddpo', [Controllerdpo::class, "adddpo"])->name("adddpo");
Route::post('/insertdpo', [Controllerdpo::class, 'insertdpo'])->name('insertdpo');

Route::get('/editdpo/{id}', [Controllerdpo::class, 'editdpo'])->name('editdpo');
Route::post('/updatedpo/{id}', [Controllerdpo::class, 'updatedpo'])->name('updatedpo');

Route::get('/delete/{id}', [Controllerdpo::class, 'deletedpo'])->name('deletedpo');
