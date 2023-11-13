<!-- resources/views/layouts/layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RasyBook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
    
        main {
            flex: 1;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>

    <header class="bg-dark text-white p-3">
        <div class="container">
            @yield('title')
        </div>
    </header>

    <main class="my-4">
        <div class="container mt-4">
            @yield('content')
        </div>
    </main>

    <footer class="bg-dark text-white p-3 text-center">
        <div class="container">
            <p style="margin: 0;">&copy; 2023 RasyBook</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>
