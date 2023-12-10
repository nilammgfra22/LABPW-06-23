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
        <button class="btn bg-success" type="submit" style="color: white; font-size: 18px; height: 40px;">Search</button>
    </form>
    </div>

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            @if (session()->has('message'))
                <div class="alert alert-{{ session()->get('alert-type') }} alert-dismissible fade show" role="alert">
                    {{ session()->get('message') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($cars as $car)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge badge-custom {{ $car->status == 'tersedia' ? 'bg-success' : 'bg-warning' }} text-white position-absolute"
                                style="top: 0; right: 0">
                                {{ $car->status }}
                            </div>
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ Storage::url($car->gambar) }}" alt="{{ $car->nama_mobil }}" style="height: 200px; object-fit: cover;"/>
                            <!-- Product details-->
                            <div class="card-body card-body-custom pt-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder" style="color: #735e59">{{ $car->nama_mobil }}</h5>
                                    <!-- Product price-->
                                    <div class="rent-price mb-3">
                                        <span class="" style="color:black; font-size: 1.4rem;">Rp
                                            {{ number_format($car->harga_sewa, 0, ',', '.') }}/</span>day
                                    </div>
                                    <ul class="list-unstyled list-style-group">
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span style="color:black" >Bensin</span>
                                            <span style="font-weight: 600; color: #438888">{{ $car->bahan_bakar }}</span>
                                        </li>
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span style="color:black">Jumlah Kursi</span>
                                            <span style="font-weight: 600; color: #438888">{{ $car->jumlah_kursi }}</span>
                                        </li>
                                        <li class="border-bottom p-2 d-flex justify-content-between">
                                            <span style="color:black">Transmisi</span>
                                            <span style="font-weight: 600; color: #438888">{{ $car->transmisi }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="text-center">
                                    @if ($car->status == 'tersedia')
                                        <a class="btn mt-auto" href="{{ route('payment', ['car_slug' => $car->slug]) }}" style="background-color: #438888">Sewa</a>
                                    @else
                                        <button class="btn btn-secondary mt-auto" disabled>Sewa</button>
                                    @endif
                                    <a class="btn mt-auto text-white" href="{{ route('user.detail', $car->slug) }}" style="background-color:black" >Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

