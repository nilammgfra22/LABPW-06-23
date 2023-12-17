<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
      .contact-me{
        width: 100%;
        padding: 100px 0;
        background-color: grey;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }

      .contact-text h2{
          color: black;
          font-size: 65px;
          text-transform: capitalize;
          margin-bottom: 20px;
          text-align: center;
      }

      .contact-box{
          color: white;
      }

      .contact-box:after{
          content: '';
          display: block;
          clear: both;
      }

      .contact {
          width: 25%;
          padding: 50px;
          box-sizing: border-box;
          text-align: center;
          float: left;
      }

      .contact h4{
          color: black;
          padding-bottom: 10px;
      }

      .contact p{
          font-size: 18;
      }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top-center">
    <div class="container-fluid mx-auto text-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#car">Car</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#driver">Driver</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="{{ route('login') }}" class="btn" style="background-color: grey; color: white">Masuk</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar -->


<!-- Corousel -->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="storage/4.jpg" class="d-block w-100" alt="gambar" style="height: 600px; width: auto;">
    </div>

  </div>
</div>

  <section class="about bg-light" id="about">
    <div class="container">
      <div class="row pt-3 pb-3">
        <div class="col">
          <h4 class="text-center">About Rental Kami</h4>
        </div>
      </div>
      <div class="row justify-content-center text-justify pb-5">
        <div class="col-md-5">
          <center><p class="text-justify">Selamat datang di VIP RENTAL CAR</p></center>
          <p class="text-justify-center">Kami adalah mitra perjalanan terbaik untuk Anda. Kami menyediakan berbagai jenis mobil yang bisa disesuaikan dengan berbagai kebutuhan. Tidak hanya itu kami juga menyediakan driver yang sangat berpengalaman yang dapat menemani perjalanan anda.</p>
        </div>
      </div>
  </section>

  <section class="contact-me">
    <div class="contact-text">
        <h2>Contact<span>Me</span></h2>
        <div class="contact-info">
            <div class="contact-box">
                <div class="contact">
                    <h4>Addres</h4>
                    <p>Pettarani</p>
                </div>
                <div class="contact">
                    <h4>Email</h4>
                    <p>Fara@gmail.com</p>
                </div>
                <div class="contact">
                    <h4>Telp</h4>
                    <p>(0411) 11111</p>
                </div>
                <div class="contact">
                    <h4>Hp</h4>
                    <p>087497273733</p>
                </div>
            </div>
        </div>
    </div>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>