@extends('layout')

@section('content')
    <style>
        .card {
            height: 100%;
        }

        .card-title {
            letter-spacing: 0.5px;
            line-height: 1.5;
        }

        .card-body {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-text {
            flex-grow: 1;
            overflow: hidden;
        }
    </style>

    <div class="row mt-3">
        @foreach ($products as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://s3-ap-northeast-1.amazonaws.com/thegate/2019/06/13/12/21/23/Arakurayama-Sengen-Shrine-Cherry-Blossoms.jpg" class="card-img-top"
                        alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->productName }}
                            <span class="badge text-bg-success">{{ $item->productLine }}</span>
                        </h5>
                        <p class="card-text">{{ substr($item->productDescription, 0, 100) }}...</p>
                        <h6 class="text-end mb-3">Stock: {{ $item->quantityInStock }}</h6>
                        <a href="/products/{{ $item->productCode }}" class="btn btn-success mt-auto">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

{{-- <div class="row align-items-center">
    <label class="col-md-3 text-end">Stock:</label>
    <div class="col-md-4">
    <input type="number" class="form-control" value="{{ $item->quantityInStock }}" disabled>
    </div>
    </div> --}}
