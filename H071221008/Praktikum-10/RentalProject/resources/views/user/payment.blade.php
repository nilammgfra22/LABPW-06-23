@extends('user.main')
@section('content')
    <header class="bg-primary py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Pembayaran</h1>
            </div>
        </div>
    </header>
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

            <div class="row justify-content-center">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                        <form action="{{ route('payment.store', ['car_slug' => $car->slug]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <p>Nama Mobil : {{ $car->nama_mobil }}</p>
                            <div class="col-lg-12 col-md-6 mb-2">
                                <div class="name-input form-group">
                                    <input type="text" name="nama" class="form-control"
                                        placeholder="Isikan Nama lengkap" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 mb-2">
                                <div class="name-input form-group">
                                    <input type="text" name="nik" class="form-control"
                                        placeholder="Isikan NIK" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 mb-2">
                                <div class="name-input form-group">
                                    <input type="date" name="tanggal" class="form-control"
                                        placeholder="Isikan Tanggal Booking" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="gambar_payment">Foto Pembayaran</label>
                                    <input type="file" class="form-control" name="gambar_payment">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="foto_ktp">Foto KTP</label>
                                    <input type="file" class="form-control" name="foto_ktp">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 mb-2">
                                <div class="form-group">
                                    <label for="driver">Sewa Driver</label>
                                    <select name="driver" class="form-control">
                                        <option value="0">Tidak</option>
                                        @foreach ($drivers as $driver)
                                            <option value="{{ $driver->id }}">{{ $driver->nama_driver }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="input-submit form-group">
                                @if ($payment && $payment->status === 'menunggu')
                                    <button type="button" class="d-block btn btn-primary" disabled>
                                        Sedang Diproses
                                    </button>
                                @else
                                    <button type="submit" style="height: 50px; width: 400px; margin: 0 auto" class="d-block btn btn-primary">
                                        Bayar
                                    </button>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection