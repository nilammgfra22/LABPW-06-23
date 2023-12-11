<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Halaman Login</title>

<style>
    .tampilan-awal {
        opacity: 0.9;
        background-image: url({{ asset('Login/bglogin.jpg') }});
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
</head>
<body>
    <section>
        <div class="tampilan-awal">
            <div class="container pt-3">
                <div class="row">
                    <div class="col">
                        <div class="card d-block mx-auto mt-2  bg-transparent" style="width: 600px;border-style:none">
                            <div class="card-body">
                                <h5 style="font-size: 100px;color: #EDEEC9" class="card-title text-center">LOGIN</h5>
                                <img class="d-block mx-auto rounded-circle mt-3" src="{{asset('Login/profil.jpg')}}" alt="" style="width: 200px;">

                                <form action="/halamanLogin" method="POST" class="d-block mx-auto" style="width: 300px;color: white">

                                    <div class="form-group">
                                        <label for="username">Username:</label>
                                        <input type="text" class="form-control" id="username" placeholder="Enter your username " required autofocus style="border-radius: 10px;box-shadow:1px 1px 3px rgb(154, 154, 154)">
                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" id="password" placeholder="Enter your password"  style="border-radius: 10px;box-shadow:1px 1px 3px rgb(154, 154, 154)">
                                    </div>
                                    <div class="form-group">
                                        <label for="userType">User Type:</label>
                                        <select class="form-control" id="userType"  style="border-radius: 10px;border-radius: 10px;box-shadow:1px 1px 3px rgb(154, 154, 154)">
                                            <option value="student" >Mahasiswa</option>
                                            <option value="instructor">Pengajar</option>
                                        </select>
                                    </div>
                                    <button id="moveButton" style="width: 100px;border-radius: 10px;box-shadow:1px 1px 3px rgb(154, 154, 154);background-color: #AFBEBF" type="submit" btn-block"><a href="/halamanHome" style="color: #EDEEC9">Login </a> </button>
                                </form>
                                <!-- Akhir Formulir Login -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
