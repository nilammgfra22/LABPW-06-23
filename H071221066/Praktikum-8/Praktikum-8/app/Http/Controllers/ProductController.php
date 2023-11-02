<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // menampilkan semua produk
        $products = Product::all();                 // operator :: u/ mengakses metode statis all() pada Product tanpa membuat instance Product
        return view('products', ['products' => $products]);  // mengembalikan root untuk menampilkan data
    }

    public function search(Request $request)
    {
        $productLine = $request->input('productLine'); // Ambil nilai yang diinputkan pengguna
        // menyesuaikan dengan nama produk dan get untuk mengambil data
        $products = Product::where('productLine', $productLine)->get();

        $pesanAlert = "The Product Not Found!";
            echo "<script>alert('$pesanAlert');</script>";

        return view('productlines', ['products' => $products]);
    }

    public function showProduct($productName) //menampilkan spesifikasi dari setiap productName
    {
        $product = Product::where('productName', $productName)->first();   //first() untuk mendapatkan hasil pertama yang sesuai.
        return view('show', ['product' => $product]);
    }
}