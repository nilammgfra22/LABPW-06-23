<?php
// Koneksi ke database
include("config.php");

// Inisialisasi variabel
$username = "";
$password = "";

// Handle pendaftaran (registrasi)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Enkripsi password sebelum disimpan di database (gunakan fungsi hash yang aman)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data pengguna
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
    $result = $conn->query($sql);

    if ($result) {
        // Redirect ke halaman login setelah berhasil mendaftar
        header("Location: login.php");
        exit;
    } else {
        echo "Gagal mendaftar: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Akun</title>
    <link rel="stylesheet" href="style.css"></link>
</head>

<body>
    <h2>Registrasi Akun</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" name="register" value="Daftar">
    </form>

    <p>Sudah memiliki akun? <a href="login.php">Masuk</a></p>
</body>

</html>