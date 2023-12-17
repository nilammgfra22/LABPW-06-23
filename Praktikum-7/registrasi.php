<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Formulir Pendaftaran Pengguna</title>
</head>
<body>
    <h1>Pendaftaran Pengguna</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $role = $_POST["role"];

        $server = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "db_mahasiswa";

        $conn = new mysqli($server, $db_username, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Cek apakah username sudah ada
        $check_query = "SELECT * FROM users WHERE username = ?"; //String ini dipke untuk ambil semua kolom di tabel "users" di mana nilai kolom "username" sama dengan parameter yang akan diikat nanti. Tanda tanya (?) adalah tanda tanya parameter yang akan diikat nilainya kemudian.
        $check_statement = $conn->prepare($check_query); // untuk menyiapkan  pernyataan SQL sebelum eksekusi ke database.
        $check_statement->bind_param("s", $username);  //untuk ikat nilai parameter ke pernyataan SQL yang telah ada sebelumnya.
        $check_statement->execute();  //u eksekusi pernyataan yg sdh ada stlh itu database akan menjalankan query yang mengambil data dari tabel "users" berdasarkan username yang diberikan.
        $result = $check_statement->get_result(); //setelah dijalankan disimpan di $result dan diambil hasilnya pke get result

        if ($result->num_rows > 0) {
            echo "Username sudah ada. Pilih username lain.";
        } else {
            // Gunakan prepared statement untuk query INSERT
            $insert_query = "INSERT INTO users (username, password, role) VALUES (?, ?, ?)"; //untuk lakukan operasi INSERT pada tabel "users" dalam database. (?) sebagai tanda tempat parameter akan diikat nanti.
            $insert_statement = $conn->prepare($insert_query);
            $insert_statement->bind_param("sss", $username, $password, $role);

            if ($insert_statement->execute()) {
                echo "Pendaftaran berhasil!";
            } else {
                echo "Error: ". $insert_statement->error;
            }
        }

        $check_statement->close();
        $insert_statement->close();
        $conn->close();
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return validateForm()">
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
        
        <label for="confirm_password">Konfirmasi Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        
        <button type="submit">Daftar</button>
        <br>
        <!-- Setelah elemen form -->
        <p>Sudah punya akun? <a href="login.php">Login disini</a></p>
    </form>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value; //u deklarasikan variabel password dan ambil nilai dari elemen HTML dengan ID "password." 
            var confirm_password = document.getElementById("confirm_password").value;

            if (password != confirm_password) {
                alert("Konfirmasi password tidak sesuai!");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>