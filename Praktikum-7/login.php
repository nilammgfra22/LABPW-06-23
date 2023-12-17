<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Formulir Masuk</title>
</head>
<body>
    <h1>LOGIN</h1>
    <?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $role = $_POST["role"]; // 

        // Saring data pengguna dari database dan verifikasi kata sandi
        $server = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "db_mahasiswa";

        $conn = new mysqli($server, $db_username, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Sesuaikan query berdasarkan peran yang dipilih
        $sql = "SELECT username, password FROM users WHERE username='$username' AND role='$role'";
        $result = $conn->query($sql); //untuk jalankan pernyataan SQL terhadap koneksi database yang sudah dibuat ($conn).

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc(); //u ambil satu baris data dari hasil query dan disimpan dalam variabel $row dalam bentuk array asosiatif 
            
            if (password_verify($password, $row["password"])) {
                $_SESSION["username"] = $username;
                $_SESSION["role"] = $role;

                // Sesuaikan pengalihan berdasarkan peran
                if ($role == "admin") {
                    header("Location: halaman_admin.php");
                } elseif ($role == "mahasiswa") {
                    header("Location: halaman_mahasiswa.php");
                } else {
                    echo "Autentikasi gagal. Peran tidak valid.";
                }

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

    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <!-- Tambahkan dropdown untuk memilih peran -->
        <label for="role">Peran:</label>
        <select id="role" name="role" required>
            <option value="admin">Admin</option>
            <option value="mahasiswa">Mahasiswa</option>
        </select>

        <button type="submit">Masuk</button>
    </form>
</body>
</html>