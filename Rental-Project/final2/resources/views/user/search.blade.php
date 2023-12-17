@extends('user.main')

@section('content')

<style>
.group {
  display: flex;
  line-height: 28px;
  align-items: center;
  margin-right: 10%;
  position: relative;
  max-width: 190px;
}

.input {
  width: 100%;
  height: 40px;
  line-height: 28px;
  padding: 0 1rem;
  padding-left: 2.5rem;
  border: 2px solid transparent;
  border-radius: 8px;
  outline: none;
  background-color: #f3f3f4;
  color: #0d0c22;
  transition: 0.3s ease;
}

.input::placeholder {
  color: #9e9ea7;
}

.input:focus,
input:hover {
  outline: none;
  border-color: rgba(234, 226, 183, 0.4);
  background-color: #fff;
  box-shadow: 0 0 0 4px rgb(234 226 183 / 10%);
}

.icon {
  position: absolute;
  left: 1rem;
  fill: #9e9ea7;
  width: 1rem;
  height: 1rem;
}
</style>

<div class="container mt-5">
    <h1 class="text-center mb-4">Search Results</h1>

    <div class="d-flex justify-content-center">
    <form action="{{ route('search') }}" method="GET" style="width: 20%" class="d-flex align-items-center group">
        <svg viewBox="0 0 24 24" aria-hidden="true" class="icon" style="font-size: 24px;">
            <g>
                <path
                    d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 
                    9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.
                    293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3
                    .365-7.5-7.5z"
                ></path>
            </g>
        </svg>
        <input class="input form-control" type="search" name="nama_mobil"required placeholder="Search by Car" aria-label="Search" style="font-size: 18px; height: 40px; width: 250px" />
        <button class="btn btn-danger" type="submit" style="color: white; font-size: 18px; height: 40px;">Search</button>
    </form>
    </div>
    
     @if (count($cars) > 0)
        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($cars as $car)
                <div class="col mb-4">
                    <div class="card h-100">
                        <!-- Gambar mobil -->
                        <img class="card-img-top" src="{{ Storage::url($car->gambar) }}" alt="{{ $car->nama_mobil }}"/>

                        <!-- Detail mobil -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $car->nama_mobil }}</h5>
                            <p class="card-text">Harga Sewa: Rp {{ number_format($car->harga_sewa, 0, ',', '.') }}/day</p>

                            <!-- Tombol Detail -->
                            <a href="{{ route('user.detail', $car->slug) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center mt-5">
            <p style="color: black">No results found.</p>
            <a class="btn btn-secondary" href="{{ route('user.index') }}">Back to Home</a>
        </div>
    @endif
</div>
@endsection
