@extends('layouts.main')

@section('content')

        <style>
            .btn-link {
                background: none;
                border: none;
                color: #0077b6;
                text-decoration: underline;
                cursor: pointer;
                padding: 0;
                font-size: inherit;
            }

            .table th {
                background-color: #0077b6;
                color: #f2a154;
            }
        </style>

    <div class="container mt-5">
        <h1 class="title text-center">Product Lists</h1>

        <div class="text-center">
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Line</th>
                        <th scope="col">Product Vendor</th>
                        <th scope="col">Quantity in Stock</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-primary m-3" style="width: 300px; height:65px;"
                                        onclick="window.location='{{ route('product.details', ['productCode' => $product->productCode]) }}'">
                                        {{ $product->productName }}
                                    </button>
                                </div>

                            </td>
                            <td>{{ $product->productLine }}</td>
                            <td>{{ $product->productVendor }}</td>
                            <td>{{ $product->quantityInStock }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$products->links()}}
        </div>
    </div>
@endsection

