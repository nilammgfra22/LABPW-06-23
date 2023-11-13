<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getAllProducts(){
        $books = Books::all();
        return view('products', compact('books'));
    }
    public function addProduct(Request $request){
        $input = new Books;
        $input->judul = $request->input('judul');
        $input->author = $request->input('author');
        $input->year = $request->input('year');
        $input->stok = $request->input('stok');
        $input->harga = $request->input('harga');
        $input->save();

        return redirect('/products');
    }
    public function getDetail($id){
        $book = Books::all()->where('bookId', $id);
        return view('getDetail', compact('book'));
    }
    public function updateBook(Request $request, $id){
        Books::where('bookId', $id)
        ->update([
            'judul' => $request->input('judul'),
            'author' => $request->input('author'),
            'year' => $request->input('year'),
            'stok' => $request->input('stok'),
            'harga' => $request->input('harga')
        ]);
        return $this->getAllProducts();
    }
    public function updateBookView($id){
        $book = Books::all()->where('bookId', $id);
        return view('editProduct', compact('book'));
    }
    public function deleteBook($id){
        Books::where('bookId', $id)->delete();
        return redirect('/products');
    }
}
