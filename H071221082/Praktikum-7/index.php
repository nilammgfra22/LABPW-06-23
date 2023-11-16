<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .login-box {
            width: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px solid;
            border-radius: 10px;
            padding: 20px 70px 30px;
            margin: 0 auto;
            margin-top: 125px;
        }

        .login-head h3 {
            margin: 0;
            padding-bottom: 20px;
        }

        .login-body {
            display: flex;
            flex-direction: column;
        }

        .login-body input {
            margin-bottom: 20px;
            text-align: center;
            height: 40px;
            width: 250px;
        }

        #login {
            background-color: rgb(29, 174, 255);
            color: black;
            border-radius: 5px;
            position: relative;
            margin: 0;
            right: 100;
            width: 100px;
            height: 35px;
        }

        .register {
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <div class="login-box">
        <div class="login-head">
            <h3>Login</h3>
        </div>
        <form action="index.php" method="post">
            <div class="login-body">
                <input type="text" name="username" id="username" placeholder="Username" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <input id="login" type="submit" value="Login" name="login"></input>
            </div>
            <div class="register">
                <p>Belum punya akun? <a href="registration.php">Daftar disini!</a></p>
            </div>
            <div class="notes"></div>
        </form>
    </div>

    <?php
    session_start();
    if (isset($_POST['login'])) {
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "praktikum7";

        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $_SESSION['username'] = $_POST['username'];
        $username = $_SESSION['username'];
        $password = $_POST['password'];

        $query = "SELECT Password FROM mahasiswa WHERE Username = '$username'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashed_password = $row['Password'];

            if ($username === "admin") {
                if ($password === $hashed_password) {
                    $query_user_info = "SELECT Fullname, NIM, Prodi FROM mahasiswa WHERE Username = '$username'";
                    $result_user_info = $conn->query($query_user_info);

                    if ($result_user_info->num_rows > 0) {
                        $user_info = $result_user_info->fetch_assoc();
                        $_SESSION['fullname'] = $user_info['Fullname'];
                        $_SESSION['nim'] = $user_info['NIM'];
                        $_SESSION['prodi'] = $user_info['Prodi'];
                    }

                    $_SESSION['username'] = $username;
                    header("Location: admin.php");
                    exit;
                } else {
                    echo "<script>document.querySelector('.notes').innerHTML = 'Kata sandi salah.';</script>";
                }
            } else {
                if (password_verify($password, $hashed_password)) {
                    $query_user_info = "SELECT Fullname, NIM, Prodi FROM mahasiswa WHERE Username = '$username'";
                    $result_user_info = $conn->query($query_user_info);

                    if ($result_user_info->num_rows > 0) {
                        $user_info = $result_user_info->fetch_assoc();
                        $_SESSION['fullname'] = $user_info['Fullname'];
                        $_SESSION['nim'] = $user_info['NIM'];
                        $_SESSION['prodi'] = $user_info['Prodi'];
                    }

                    $_SESSION['username'] = $username;
                    header("Location: mahasiswa.php");
                    exit;
                } else {
                    echo "<script>document.querySelector('.notes').innerHTML = 'Kata sandi salah.';</script>";
                }
            }
        } else {
            echo "<script>document.querySelector('.notes').innerHTML = '*Username tidak ditemukan';</script>";
        }

        $conn->close();
    }
    ?>
</body>

</html>