<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>User Profil</title>
    <style>
          .tampilan-awal {
        opacity: 0.9;
        background-image: url({{ asset('userprofil/userprobg.jpg') }});
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        display: flex;
        align-items: center;
        /* justify-content: center; */
    }



    </style>
</head>
<body>
    <section>
        <div class="tampilan-awal">
            <div class="container">
                <div class="row">
                    <div class="col">
                       <h1 class="text-center" style="color: aqua;font-size:100px">LOG IN</h1>
                       <img style="width: 200px" class="rounded-circle d-block mx-auto mb-5" src="{{asset('Login/profil.jpg')}}" alt="">
                       <h1 class="text-center">User Name : </h1>
                       <h1 class="text-center">Password : </h1>
                       <h1 class="text-center">Status : </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
