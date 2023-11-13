@extends("layout")

@section("content")
<div class="container mt-4">
    <div class="card-deck">
        @foreach($book as $item)
        <div class="card mb-4 mx-auto" style="width: 20rem; height: 27rem;">
            <div class="card-body">
                <h5 class="card-title text-center">{{ $item->judul }}</h5>
                <br>
                <img src="https://images.pexels.com/photos/942873/pexels-photo-942873.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top mx-auto d-block" alt="gambar buku" style="width:250px;">
                <br>
                <p class="card-text"><strong>Author:</strong> {{ $item->author }}</p>
                <p class="card-text"><strong>Year:</strong> {{ $item->year }}</p>
                <p class="card-text"><strong>Stok:</strong> {{ $item->stok }}</p>
                <p class="card-text"><strong>Harga:</strong> Rp.{{ $item->harga }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        <a href="/products" class="btn btn-primary me-2">Kembali</a>
    </div>
</div>
@endsection

@section("title")
<h1>Get Book</h1>
@endsection
