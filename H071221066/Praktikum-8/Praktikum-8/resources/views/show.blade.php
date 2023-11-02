@extends('layouts.main')
@section('container')
    <h2 class="mt-4" style="color: #d45ea9;">Product Information</h2>
    <h5 class="mt-4">Product Name : {{ $product->productName }}</h5>
    <p>Product Line : {{ $product->productLine }}</p>
    <p>Product Scale: {{ $product->productScale }}</p>
    <p>Product Seller : {{ $product->productVendor }}</p>
    <p>Description : {{ $product->productDescription }}</p>
    <p>Quantity In Stock : {{ $product->quantityInStock }}</p>
    <p>Buy Price : {{ $product->buyPrice }}</p>
    <p>Price Each : {{ $product->MSRP }}</p>
    <a href="/product" class="btn btn-danger">Back to Products</a>
@endsection
