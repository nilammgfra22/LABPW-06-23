@extends('layouts.admin')

@section('content')
    <div class="row">
        <section class="py-5">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 justify-content-center">
                    @foreach ($cars as $car)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="{{ Storage::url($car->gambar) }}" alt="{{ $car->nama_mobil }}" style="height: 300px; object-fit: cover;"/>
                                <!-- Product details-->
                                <div class="card-body card-body-custom pt-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder" style="color: #101044">{{ $car->nama_mobil }}</h5>
                                        <!-- Product price-->
                                        <div class="rent-price mb-3">
                                            <span class="" style="color: #101044 ">Rp
                                                {{ number_format($car->harga_sewa, 0, ',', '.') }}/</span>day
                                        </div>
                                        <ul class="list-unstyled list-style-group">
                                            <li class="border-bottom p-2 d-flex justify-content-between">
                                                <span style="color: #101044" >Nama Penyewa</span>
                                                <span style="font-weight: 600; color: #020435">{{ $car->nama_penyewa }}</span>
                                            </li>
                                            <li class="border-bottom p-2 d-flex justify-content-between">
                                                <span style="color: #101044" >Bahan Bakar</span>
                                                <span style="font-weight: 600; color: #020435">{{ $car->bahan_bakar }}</span>
                                            </li>
                                            <li class="border-bottom p-2 d-flex justify-content-between">
                                                <span style="color: #101044">Jumlah Kursi</span>
                                                <span style="font-weight: 600; color: #020435">{{ $car->jumlah_kursi }}</span>
                                            </li>
                                            <li class="border-bottom p-2 d-flex justify-content-between">
                                                <span style="color: #101044">Transmisi</span>
                                                <span style="font-weight: 600; color: #020435">{{ $car->transmisi }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection