<?php

include("./config/Connection.php");

class RegisterController extends Connection
{
    public function __construct($data)
    {
        parent::__construct();

        $nama = $data['nama'];
        $nim = $data['nim'];
        $prodi = $data['prodi'];
        $password = $data['password'];
        $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
        $confirmPassword = $data['confirmPassword'];

        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_prepare($this->connect, $query);
        $stmt->bind_param("s", $nim);
        $stmt->execute();
        $result = $stmt->get_result();
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('NIM sudah terdaftar!')</script>";
            return;
        }
        if ($password == $confirmPassword) {
            $query = "INSERT INTO users VALUES ('', ?, ?, ?, 'mahasiswa', ?)";
            $stmt = mysqli_prepare($this->connect, $query);
            $stmt->bind_param("ssss", $nim, $nama, $prodi, $hashedpassword);
            $stmt->execute();
            header("Location: index.php?message=Berhasil mendaftar!");
            return;
        } else {
            echo "<script>alert('Konfirmasi password tidak sesuai!')</script>";
            return;
        }
    }
}
?>