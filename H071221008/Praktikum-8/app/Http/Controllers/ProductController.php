<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // mengambil semua data dari tabel product
    public function index()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }
    // mengambil smua data yg dmna jika di cari produkline maka akan menampilkan smua nama product yg sama product linenya
    public function search(Request $request)
    {
        $productLine = $request->input('productLine');
        // Lakukan pencarian product line
        $products = Product::where('productLine', $productLine)->get();
    
        // Periksa apakah ada produk yang sesuai dengan product line
        if ($products->isEmpty()) {
            // Jika tidak ada produk yang ditemukan, tampilkan pesan alert
            $pesanAlert = "Tidak ada produk yang cocok dengan product line yang Anda cari.";
            echo "<script>alert('$pesanAlert');</script>";
        }
    
        return view('productlines', ['products' => $products]);
    }
    
    
    // informasi detail product
    // menampilkan spesifik dari stiap productname
    public function showProduct($productName)
    {
    // untuk menampilan hasil pertama yg sesuai
        $product = Product::where('productName', $productName)->first();

        return view('show', ['product' => $product]);
    }
}
