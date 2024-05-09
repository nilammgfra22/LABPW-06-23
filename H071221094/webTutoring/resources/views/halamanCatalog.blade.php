<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

        body{
            background-color: #f1f1f1
        }

        .tampilan-awal {
            opacity: 0.9;
            background-image: url({{ asset('catalog/ctalogbg1.jpg') }});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 50vh;
            display: flex;
            align-items: center;
            /* justify-content: center; */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid pb-5 mb-5" style="height: 100px">
            <a class="navbar-brand" href="#"><img style="width: 100px" src="{{ asset('homePage/eduhub.png') }}"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/halamanHome">Home</a>
                    <a class="nav-link" href="/profilPengguna">Profile</a>
                    <a class="nav-link" href="/">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <section>
        <div class="tampilan-awal" style="">
            <div class="container">
                <div class="row">
                    <div class="col ml-auto text-start">
                        <h1 style="font-weight: bold;color:aqua">Selamat Datang di <br> Katalog Kami!</h1>
                        <p style="color: white">Mari temukan solusi yang sempurna untuk kebutuhan Anda di dalam katalog
                            kami.</p>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="tampilan-kedua">
            <h1 class="pt-5 mt-3 text-center">Daftar Course</h1>
            <table class="table pt-5 mt-3">
                <thead>
                    <tr>
                        <th scope="col">Nama Course</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Nama Pengajar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fisika</td>
                        <td>Fisika Merupakan Ilmu yang mempelejri tentang apa?</td>
                        <td>Armin s.si</td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
