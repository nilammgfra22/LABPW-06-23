<?php
// import kelas
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // daftar produk mengembalikan tampilan 'index' dengan data produk
    // yang diurutkan berdasarkan waktu pembuatan terbaru dan dipaginasi dengan 5 produk per halaman.
    // menampilkan data dan return mengembalikan niali ke view index
    public function index()
    {
        return view('index', ['products'=> Product::latest()->paginate(5) ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // berisi formulir untuk membuat produk baru.
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // mengambil nilai dari inputan trs dikrm&disimpan dlm database
    public function store(Request $request)
    {
        //validasi data
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif|max:10000'
        ]);

        //upload image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img'), $imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->jenis = $request->jenis;
        $product->deskripsi = $request->deskripsi;

        $product->save();
        // with succes nnti di tambahkan ke index
        return redirect()->route('product.index')->withSuccess('Product Telah Di tambahkan!!!');
    }

    /**
     * Display the specified resource.
     */
    // untuk menampilkan detail produk berdasarkan ID yang diberikan. Itu mencari produk berdasarkan ID 
    // kemudian mengembalikan tampilan 'show' dengan data produk yang sesuai.
    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        return view('show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // mengembalikan tampilan 'edit' yang berisi formulir untuk mengedit produk yg ada
    // Produk yang akan diedit dipilih berdasarkan ID yang diberikan
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //validasi data
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'jenis' => 'nullable',
            'deskripsi' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg,gif|max:10000'
        ]);

        $product = Product::where('id', $id)->first();

        if(isset($request->image)){
            //upload image
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('img'), $imageName);
            $product->image = $imageName;
        }

        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->jenis = $request->jenis;
        $product->deskripsi = $request->deskripsi;

        $product->save();

        return redirect()->route('product.index')->withSuccess('Product Berhasil Di Ubah!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    // hapus
    public function destroy($id)
    {
        $product =Product::where('id', $id)->first();
        $product->delete();
        return back()->withSuccess('Produk Berhasil di Hapus!!!');
    }

    public function search(Request $request)
    {
        $jenis = $request->input('jenis'); // Ambil nilai yang diinputkan pengguna

        $products = Product::where('jenis', $jenis)->get();

        return view('jenis', ['products' => $products]);
    }
}
