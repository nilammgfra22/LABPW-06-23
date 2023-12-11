<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Home Page</title>
</head>
<style>
    .tampilan-awal {
        /* opacity: 0.9; */
        background-image: url({{ asset('homePage/homebg1.jpg') }});
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .tulisan-navbar a{
        color: rgb(98, 98, 98);
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid pb-5 mb-5" style="height: 100px">
            <p  class="navbar-brand mt-2" style="font-weight: bold;color: #99A60C;text-shadow: 1px 1px 10px rgb(0, 0, 0)">عندما أراك يبتسم قلبي</p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNavAltMarkup">
                <div class="tulisan-navbar navbar-nav">
                    <a class="nav-link active" aria-current="page" href="">Home</a>
                    <a class="nav-link" href="/">Login</a>
                    <a class="nav-link" href="/profilPengguna">User</a>
                    <a class="nav-link" href="/halamanCatalog">Catalog</a>
                </div>
                <form class="d-flex mx-5" role="search">
                    <input style="border-radius:15px;border:2px solid white;" class="form-control me-2 bg-transparent" type="search" placeholder="Search" aria-label="Search">
                  </form>
            </div>
        </div>
    </nav>
    <section>
        <div class="tampilan-awal">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center" style="font-weight: bold;color: #CFD826;text-shadow: 5px 3px 30px black">
                            WELCOME TO <span style="color:white"> MY WEBSITE </span></h1>
                        <h6 class="text-center" style="font-weight: bold;color: #FFF005;text-shadow: 5px 3px 30px black">
                            MENEMUKAN PENGETAHUAN, MENUMBUHKAN POTENSI</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="course-terpopuler pb-5" style="background-color: #CFD826">
            <div class="container-fluid p-5">
                <h1 class="text-center pt-5 pb-5" style="color:#ffffff;text-shadow: 2px 2px 5px rgb(74, 74, 74);font-weight: bold">Rekomendasi Matapelajaran</h1>
                <div class="row p-5">
                    <div class="col">
                        <div class="card bg-transparent" style="width: 13rem;border-style: none">
                           <img class="rounded-circle card-img-top" src="{{ asset('homePage/kimia.jpg') }}"
                                alt="..." style="box-shadow: 1px 1px 20px black">
                            <div class="card-body">
                                <h5 class="card-title text-center">Kimia</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-transparent" style="width: 13rem;border-style: none">
                            <img class="rounded-circle" src="{{ asset('homePage/Pemrograman.jpg') }}"
                                style="box-shadow: 1px 1px 20px black" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center" ><a style="color: black" href="/halamanLesson">Pemrograman</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-transparent" style="width: 13rem;border-style: none">
                            <img class="rounded-circle" src="{{ asset('homePage/aljabar.jpg') }}" style="box-shadow: 1px 1px 20px black"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Aljabar</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-transparent" style="width: 13rem;border-style: none">
                            <img class="rounded-circle" src="{{ asset('homePage/database.jpg') }}" style="box-shadow: 1px 1px 20px black"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Database</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="card bg-transparent" style="width: 13rem;border-style: none">
                            <img class="rounded-circle" src="{{ asset('homePage/fisika.jpg') }}" style="box-shadow: 1px 1px 20px black"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Fisika</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="tampilan-pertama pb-5" style="background-color: #99A60C">
            <div class="container">
                <H1 class="text-center pt-5">Tentang Website</H1>
                <p class="text-center"></p>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card bg-transparent" style="width: 18rem;border-style: none">
                            <img src="{{ asset('homePage/about.jpg') }}" class="card-img-top" style="border-radius: 10px" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        Misi kami adalah memberikan pengalaman pembelajaran yang inspiratif dan terjangkau, menjembatani kesenjangan pengetahuan, dan membantu Anda mencapai tujuan pendidikan Anda. Kami percaya pada kualitas tinggi, fleksibilitas belajar, dan dukungan penuh kepada setiap pembelajar. Kursus-kursus kami dirancang oleh para ahli di bidangnya untuk memberikan wawasan mendalam dan pemahaman yang kokoh.
                        <br>
                        "Hari Ini Esok Dan Selamanya"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <footer>
            <div class="tampilan-footer" style="background-color: #FFF005;height: 200px">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h5 class="pt-5">Contact Me</h5>
                           <a href="https://github.com/Muh-Fahri"><img src="{{asset('socialMedia/githublogo.png')}}" style="width:30px"  alt="..."></a>
                           <a href="https://youtu.be/4Lsbg4tq9-Q?si=kKkb_HLbXYtc1OPg"><img style="width: 50px" src="{{asset('medsos/instagram.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
