@extends('layout')

@section('title')
    <h1>Add Book</h1>
@endsection

@section('content')
<style>
    .form-control {
        border: 1px solid #08080876;
        border-radius: 4px;
        padding: 8px;
        margin-bottom: 10px;
    }

    .btn {
        margin-top: 10px;
    }
</style>
<form action="/products/add" method="POST" class="mt-4 text-center">
    @csrf
    <div class="mb-3 text-center">
        <label for="judul" class="form-label">Judul:</label>
        <div class="col-5 mx-auto">
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
    </div>

    <div class="mb-3 text-center">
        <label for="author" class="form-label">Author:</label>
        <div class="col-5 mx-auto">
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
    </div>

    <div class="mb-3 text-center">
        <label for="year" class="form-label">Year:</label>
        <div class="col-5 mx-auto">
            <input type="number" class="form-control" id="year" name="year" required>
        </div>
    </div>

    <div class="mb-3 text-center">
        <label for="stok" class="form-label">Stok:</label>
        <div class="col-5 mx-auto">
            <input type="number" class="form-control" id="stok" name="stok" required>
        </div>
    </div>

    <div class="mb-3 text-center">
        <label for="harga" class="form-label">Harga:</label>
        <div class="col-5 mx-auto">
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>
    </div>

    <a href="/products" class="btn btn-primary me-2">Kembali</a>
    <button type="submit" class="btn btn-success" id="btnAddProd" onclick="return alert('Data berhasil ditambahkan!')">Tambah Produk</button>
</form>

@endsection