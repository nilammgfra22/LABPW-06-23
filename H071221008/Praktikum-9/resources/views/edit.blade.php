@extends('layouts.main')
@section('container')
{{-- Ini memeriksa apakah terdapat pesan sukses yg disimpan di sesi. Jika ya, maka ditampilkan blok peringatan sukses. --}}
{{-- untuk keamanan formulir dan melibatkan perlindungan terhadap CSRF --}}
{{--endif menutup blok kondisional untuk mengatur bagian mana dari kode yg harus dijalnkn berdasarkan kondisi tertentu. --}}
{{--kondisi yg diberikan (keberhasilan pesan) terpenuhi  --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card p-4 mt-5">
                <h3>Edit Product</h3>
                <form method="POST" action="/product/{{ $product->id }}/update" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Nama Barang :</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama', $product->nama) }}"
                            placeholder="Masukkan nama barang">
                        @if ($errors->has('nama'))
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Harga Barang :</label>
                        <input type="text" class="form-control" name="harga"
                            value="{{ old('harga', $product->harga) }}" placeholder="Masukkan harga barang">
                        @if ($errors->has('harga'))
                            <span class="text-danger">{{ $errors->first('harga') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Kategori Barang :</label>
                        <select class="form-select" name="jenis">
                            <option>{{ $product->jenis }}</option>
                            <option value="Televisi">Televisi</option>
                            <option value="Gadget">Gadget</option>
                            <option value="Perangkat Komputer">Perangkat Komputer</option>
                            <option value="Elektronik Rumah Tangga">Elektronik Rumah Tangga</option>
                            <option value="Elektronik Kendaraan">Elektronik Kendaraan</option>
                        </select>
                        @if ($errors->has('jenis'))
                            <span class="text-danger">{{ $errors->first('jenis') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Deskripsi :</label>
                        <textarea class="form-control" rows="4" name="deskripsi" placeholder="Masukkan deskripsi barang">{{ old('deskripsi', $product->deskripsi) }}</textarea>
                        @if ($errors->has('deskripsi'))
                            <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Gambar Barang :</label>
                        <input type="file" class="form-control" name="image" placeholder="Masukkan gambar barang">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-dark mt-4">Add Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
