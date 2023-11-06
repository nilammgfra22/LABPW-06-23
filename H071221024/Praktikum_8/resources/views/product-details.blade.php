@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="https://s3-ap-northeast-1.amazonaws.com/thegate/2019/06/13/12/21/23/Arakurayama-Sengen-Shrine-Cherry-Blossoms.jpg" alt="Product Image"
                    class="img-fluid">
            </div>
            <div class="col-md-8">
                @foreach ($productdetails as $item)
                    <h2>{{ $item->productName }}</h2>
                    <p>{{ $item->productDescription }}</p>
                    <p>Stock: {{ $item->quantityInStock }}</p>
                    <p>Price: ${{ $item->buyPrice }}</p>
                    <a href="" class="btn btn-success">Buy Now</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
