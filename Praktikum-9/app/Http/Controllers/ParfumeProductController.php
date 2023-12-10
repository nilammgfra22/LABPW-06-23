<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParfumeProduct;


class ParfumeProductController extends Controller
{
    public function home()
    {
        return view('home'); // Atau ganti dengan nama view yang sesuai
    }

    public function index() //Mengambil semua produk makeup dari database
    {
        $parfumeProducts = ParfumeProduct::all();
        return view('index', compact('parfumeProducts'));
    }

    public function create() //Menampilkan formulir untuk membuat produk makeup baru.
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $this->validateProductData($request); //untuk memastikan bahwa data yang masuk dari request valid berdasarkan aturan validas

        ParfumeProduct::create($data); //membuat instance baru dari model ParfumeProduct dan mengisinya dengan data yang telah divalidasi. Kemudian, menyimpan instance baru tersebut ke dalam database.

        return redirect()->route('parfume-products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function show(ParfumeProduct $parfumeProduct) //Menampilkan detail dari produk makeup tertentu.
    {
        return view('show', compact('parfumeProduct'));
    }

    public function edit(ParfumeProduct $parfumeProduct) //Menampilkan formulir untuk mengedit produk makeup tertentu.
    {
        return view('edit', compact('parfumeProduct'));
    }

    public function update(Request $request, ParfumeProduct $parfumeProduct)
    {
        $data = $this->validateProductData($request);
        $parfumeProduct->update($data);
        return redirect()->route('parfume-products.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(ParfumeProduct $parfumeProduct) //Menghapus produk parfume tertentu dari database
    {
        $parfumeProduct->delete();
        return redirect()->route('parfume-products.index')->with('success', 'Produk berhasil dihapus.');
    }

    private function validateProductData(Request $request) //Menangani pengiriman formulir untuk memperbarui produk parfume yang sudah ada di database
    {
        return $request->validate([
            'name' => 'required',
            'description' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);
    }
}
