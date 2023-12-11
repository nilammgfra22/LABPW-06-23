<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leson Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
    <style>
        .tampilan-awal {
            opacity: 0.9;
            background-image: url({{asset('lesonpage/sampel1.jpg')}});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 50vh;
            display: flex;
            align-items: center;
        /* justify-content: center; */
    }

    .tampilan-utama a {
            color: black;

        }

    .tulisan-navbar a{
            color: rgb(227, 227, 227);
        }
    </style>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid pb-5 mb-5" style="height: 100px">
            <a  class="navbar-brand" href="#"><img style="width: 100px" src="{{asset('homePage/eduhub.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNavAltMarkup">
                <div class="tulisan-navbar navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/halamanHome">Home</a>
                    <a class="nav-link" href="/">Login</a>
                    <a class="nav-link" href="/profilPengguna">User</a>
                </div>
            </div>
        </div>
    </nav>
    <section>
        <div class="tampilan-awal">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 style="color:#EDEEC9">Pemrograman Class</h1>
                        <p style="color: white">Selamat datang di halaman ini</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tampilan-utama" style="background-color:#B5C890">
            <div class="container">
                <div class="row pt-5">
                    <div class="col mt-2">
                        <h1 class="d-block mx-auto text-center" style="color: #D7E3C0;background-color:#78865c;width:398px;border-radius:10px;height:55px;box-shadow:2px 4px 20px rgb(79, 79, 79)">Materi Pembelajaran</h1>
                        <br>
                        <br>
                        <br>
                        <h4>Pengajar :</h4>
                        <img style="width:300px;border-radius:20px;box-shadow:2px 2px 50px rgb(67, 67, 67)" src="{{asset('lesonpage/kucing.jpg')}}" alt="Anggap saja ada foto">
                        <br>
                        <br>
                        <h5 class="pl-4 ml-5">Kucing Sarjana</h5>
                        <br>
                        <br>
                        <br>
                        <h4>Materi Yang di bawakan</h4>
                        <ul>
                            <a href="https://youtu.be/QwLvrnlfdNo?si=ROO9WJLaaFygts3H"><li>Cyber</li></a>
                            <a href="https://youtu.be/ZxKM3DCV2kE?si=Dt2aL_981AZW8a5P"> <li>Web Development</li></a>
                            <a href="https://youtu.be/B-ytMSuwbf8?si=6ZgCqWwxk_NS4LcW"><li>Web Designer</li></a>
                            <a href="https://youtu.be/BjrTxkoyxSY?si=lb2DUg7dSJI-sOa0"><li>Designer UI</li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="tampilan-foot" style="background-color: #D7E3C0;height:200px" >
            <div class="container">
                <div class="row pt-5">
                    <div class="col mt-2">
                        <h5 >Contact Me</h5>
                         <a href="https://github.com/Muh-Fahri"><img src="{{asset('socialMedia/githublogo.png')}}" style="width:30px"  alt="..."></a>
                           <a href="https://youtu.be/4Lsbg4tq9-Q?si=kKkb_HLbXYtc1OPg"><img style="width: 50px" src="{{asset('medsos/instagram.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
