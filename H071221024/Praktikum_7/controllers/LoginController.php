<?php

include("./config/Connection.php");

class LoginController extends Connection
{
    public function __construct($data)
    {
        parent::__construct();

        $username = $data['username'];
        $password = $data['password'];

        $queryForPass = "SELECT password FROM users WHERE username = ?";
        $stmt = mysqli_prepare($this->connect, $queryForPass);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $resultForPass = $stmt->get_result();
        if (mysqli_num_rows($resultForPass) > 0){
            while ($data = mysqli_fetch_assoc($resultForPass)){
                $hashedpassword = $data['password'];
            }
        }
        if(password_verify($password, $hashedpassword)){
            $query = "SELECT * FROM users WHERE username = ? AND password = '$hashedpassword'";
        } else if (!password_verify($password, $hashedpassword)){
            $query = "SELECT * FROM users WHERE username = ? AND password = '$password'";
        }
        $stmt = mysqli_prepare($this->connect, $query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if (mysqli_num_rows($result) > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['id'] = $data['id'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['prodi'] = $data['prodi'];
            $_SESSION['status'] = 'login';
            if ($data['role'] == 'admin') {
                    header("Location: dashboard/index-admin.php");
            } else {
                header("Location: dashboard/index.php");
            }
            }
            return;
        } else {
            header("Location: index.php?message=Password Salah!");
            return;
        }
    }
}
?>