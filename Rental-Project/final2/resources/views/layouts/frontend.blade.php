<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rental Mobil</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
  </head>
  <body>
   <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container px-4 px-lg-5">
          <a class="navbar-brand" href="{{ route('homepage') }}">Start Bootstrap</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link active" href="{{ route('homepage') }}">Home</a>
                  </li>
                  <!-- Add this block for logout -->
                  <li class="nav-item active">
                      <a class="nav-link" onclick="document.getElementById('logout-form').submit()" href="javascript:void(0);" type="button">
                          <i class="fas fa-sign-out-alt fa-fw"></i>
                          <span>Logout</span>
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                          @csrf
                      </form>
                  </li>
                  <!-- End of logout block -->
              </ul>
          </div>
      </div>
  </nav>

    <!-- Header-->
    @yield('content')
    <!-- Footer-->
    <footer class="py-5 bg-dark">
      <div class="container">
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
  </body>
</html>
