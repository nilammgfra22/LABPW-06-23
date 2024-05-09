<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role']; // Ambil peran dari formulir

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND role = $role";
    $result = $conn->query($sql);

        if ($role == 'admin') {
            header("Location: admin_dashboard.php");
        } else if ($role == 'mahasiswa') {
            header("Location: mahasiswa_dashboard.php");
        }
    } else {
        echo "Login gagal, harap cek kembali username dan password anda";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="role">Peran:</label>
        <input type="radio" name="role" value="mahasiswa" checked> Mahasiswa<br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

