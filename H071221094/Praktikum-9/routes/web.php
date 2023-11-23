<?php

use App\Http\Controllers\DutyController;
use App\Models\Duty;
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
Route::get('/', [DutyController::class, "index"])->name("character");

Route::get('/viewcharacter/{id}', [DutyController::class,'viewcharacter'])->name('viewcharacter');

Route::get('/addcharacter', [DutyController::class, "addcharacter"])->name("addcharacter");
Route::post('/insertcharacter', [DutyController::class,'insertcharacter'])->name('insertcharacter');

Route::get('/editcharacter/{id}', [DutyController::class,'editcharacter'])->name('editcharacter');
Route::post('/updatecharacter/{id}', [DutyController::class,'updatecharacter'])->name('updatecharacter');

Route::get('/delete/{id}', [DutyController::class,'deletecharacter'])->name('deletecharacter');
