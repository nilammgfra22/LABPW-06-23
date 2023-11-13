<?php

use App\Http\Controllers\ProductsController;
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

Route::get('/products', [ProductsController::class, 'getAllProducts']);

Route::get('/products/add', function(){
    return view("addproduct");
})->name('product.add');

Route::post('/products/add', [ProductsController::class, 'addProduct']);

Route::get('/products/{id}',[ProductsController::class, 'getDetail'])->name('getDetails');

Route::get('/products/{id}/edit', [ProductsController::class, 'updateBookView'])->name('bookUpdateView');

Route::put('/products/{id}/editBook', [ProductsController::class, 'updateBook'])->name('bookUpdate');

Route::delete('/products/{id}/delete', [ProductsController::class, 'deleteBook'])->name('bookDelete');