<?php
//fungsi di database utk mengembalikan semua nilai-nilai yg ada 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        //menampilkan semua produk yang ada, mengambil semua data produk dari database menggunakan model Product
        $products = Product::all();

        //kemnbalikan nilai semua produk
        return view('products', ['products' => $products]);
    }

    public function search(Request $request)
    //mencari produk berdasarkan garis produk (product line) 
    {
        $productLine = $request->input('productLine'); // Ambil nilai yang diinputkan pengguna

        $products = Product::where('productLine', $productLine)->get();
        //mencari produk yang memiliki nilai kolom 'productLine' yang sesuai dengan nilai yang diinputkan pengguna.

        return view('productlines', ['products' => $products]);
        //dikirimkan dan dikembalikan ke tampilan dengan nama 'productlines'.
    }

    public function showProduct($productName)
    //menampilkan detail produk berdasarkan nama produk yang diberikan 
    {
        $product = Product::where('productName', $productName)->first();
        //mencari produk yang memiliki nama yang sesuai dengan nilai yang diberikan

        return view('show', ['product' => $product]);
    }
}
