<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<div class="login">
    <div class="container d-center">
        <center>
            <h1>Login Page</h1> <br>
            <form action="" method="post">
                <div class="container">
                    <div class="mb-3">
                        <label for="email" class="form-label" style="text-align: left; display: block;">Email Address :</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Input your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" style="text-align: left; display: block;">Password :</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Input your password" required>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col text-start">
                                <a href="register.php" class="btn btn-link">Belum punya akun?</a>
                            </div>
                            <div class="col text-end">
                                <button type="submit" class="btn btn-primary" name="submit">login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </center>
    </div>
</div>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "tugas7";

    $conn = new mysqli($server, $db_username, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "SELECT email, password FROM mahasiswa WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if ($email == "admin@gmail.com" && $password == $row["password"]) {
            $_SESSION["email"] = $email;
            $_SESSION["role"] = "admin";
            header("Location: admin.php");
            exit();
        } else if (password_verify($password, $row["password"])) {
            $_SESSION["email"] = $email;
            $_SESSION["role"] = "mahasiswa";

            $info_query = "SELECT nama, nim, prodi FROM mahasiswa WHERE email='$email'";
            $info_result = $conn->query($info_query);

            if ($info_result->num_rows == 1) {
                $info_row = $info_result->fetch_assoc();
                $_SESSION["nama"] = $info_row["nama"];
                $_SESSION["nim"] = $info_row["nim"];
                $_SESSION["prodi"] = $info_row["prodi"];
            }

            header("Location: mahasiswa.php");
            exit();
        } else {
            echo "Autentikasi gagal. Silakan coba lagi.";
        }
    } else {
        echo "Autentikasi gagal. Silakan coba lagi.";
    }

    $conn->close();
}
?>


</html>