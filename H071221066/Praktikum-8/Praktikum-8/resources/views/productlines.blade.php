@extends('layouts.main')
@section('container')
    <h1>Product Search Results</h1>
    <ul>
        @foreach ($products as $product)
            <li> <a href="{{ route('products.show', $product->productName) }}" 
                style="color: #d45ea9;">{{ $product->productName }}</a></li>
        @endforeach
    </ul>
    <a href="/" class="btn btn-danger">Back to home</a>
@endsection
