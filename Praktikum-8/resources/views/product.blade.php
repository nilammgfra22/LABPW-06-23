<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- Add Bootstrap CDN link -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgb(180, 236, 182);
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #977599;
            color: #2e2c2f;
            padding: 10px;
            text-align: center;
        }

        form {
            margin: 20px;
            text-align: center;
        }

        .product-container {
            margin: 10px;
        }

        hr {
            border: 1px solid #ccc;
            margin: 15px 0;
        }
        button {
            margin: 15px;
            background-color:rgb(196, 200, 199);
            width: 800px;
            border-radius: 15px;
            padding: 30px;

        }
        a{
            color: rgb(255, 127, 140);
        }
    </style>
</head>
<body>
    <header>
        <h1>DATA PRODUK LENGKAP</h1>
    </header>

    <div class="container">
        <form class="form-inline justify-content-center" method="post">
            <!-- Remove the input field and add buttons for different product types -->
            <button><a href="/product/Motorcycles">Motor Cycles</a></button>
            <button><a href="/product/ClassicCars">Classic Cars</a></button>
            <button><a href="/product/Planes">Planes</a></button>
            <button><a href="/product/Trains">Trains</a></button>
            <button><a href="/product/Ships">Ships</a></button>
            <button><a href="/product/TrucksBuses">Trucks Buses</a></button>
            <button><a href="/product/VintageCars">Vintage Cars</a></button>
        </form>

        <div class="product-container">
            @foreach($data as $read)
                <!-- Check if the product type matches the submitted value -->
                @if(isset($_POST['productLine']) && $read->productLine === $_POST['productLine'])
                    <hr>
                    <p>NAMA PRODUK: {{$read->productName}}</p>
                    <p>JENIS PRODUK: {{$read->productLine}}</p>
                    <p>PRODUK VENDOR: {{$read->productVendor}}</p>
                    <p>STOK: {{$read->quantityInStock}}</p>
                @endif
            @endforeach
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js CDN links -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
