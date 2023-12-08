@extends('layouts.main')
<style>
    body {
        background-color: #d4c3af;
    }

    nav {
        position: fixed;
        background-color: #c1b59f;
        justify-content: center;
        text-align: center;
        align-items: center;
    }

    ul {
        display: flex;
        gap: 20px;
        text-decoration: none;
        justify-content: space-between;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    nav li {
        color: black;
        font-size: 20px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        list-style: none;
        box-shadow: inset 0 0 0 0 #c1b59f;
        margin: 0 -.25rem;
        padding: 0 .25rem;
    }

    .title {
        padding-top: 50px;
    }

    .search {
        display: inline-block;
        border-radius: 20px;
        background-color: #4f493f;
        color: #c1b59f;
        transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        cursor: pointer;
    }

    .search:hover {
        background-color: #4f493f;
        transform: scale(1.05);
        box-shadow: 0 0 10px #c1b59f;
        color: #FFF;
    }

    .pencarian {
        padding-left: 500px;
        gap: 10px;
    }

    .menu {
        color: #000000;
    }
</style>

@section('container')
    <div class="container">
        <div class="title d-flex align-items-center justify-content-center">
            <h1>Tambah Barang</h1>
        </div>
        <hr>
        @if (Session::has('failled'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('failled') }}
            </div>
        @endif
        <form class="row g-3" action="{{ route('toko.store') }}" method="POST">
            @csrf
            <div class="col-md-6">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Item">
            </div>
            <div class="col-md-6">
                <label class="form-label">Harga</label>
                <input type="text" name="harga" class="form-control" placeholder="Harga Item">
            </div>
            <div class="col-12 mt-4">
                <label class="form-label">Jenis Barang</label>
                <select name="jenis" class="form-select">
                    <option value="">Pilih Jenis Sepatu</option>
                    <option value="sneakers">Sneaker</option>
                    <option value="flat shoes">Flat Shoes</option>
                    <option value="boots">Boots</option>
                    <option value="slip on">Slip On</option>
                    <option value="oxford shoes">Oxford Shoes</option>
                </select>
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Deskripsi</label>
                <textarea type="text" name="deskripsi" class="form-control" placeholder="Deskripsi Item"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn search">Tambah</button>
            </div>
        </form>
    </div>
@endsection