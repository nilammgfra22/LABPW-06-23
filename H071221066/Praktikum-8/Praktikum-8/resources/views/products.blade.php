@extends('layouts.main')
@section('container')
    @foreach ($products as $product)
        <article class="mb-5">
            <h3 class="mb-3">
                <h3>Product Name : <a href="{{ route('products.show', $product->productName) }}" 
                    style="color: rgb(212, 94, 169);">{{ $product->productName }}</a></h3>
            <p>Product Line : {{ $product->productLine }}</p>
            <p>Product Vendor : {{ $product->productVendor }}</p>
            <p>Quantity In Stock : {{ $product->quantityInStock }}</p>
        </article>
    @endforeach
@endsection