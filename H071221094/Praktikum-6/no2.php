


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Data</h1>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br><br>
        
        <label for="usia">Usia:</label>
        <input type="number" name="usia" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        
        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" required><br><br>
        
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan<br><br>
        
        <label for="bahasa[]">Bahasa yang dikuasai:</label>
        <input type="checkbox" name="bahasa[]" value="Java"> Java
        <input type="checkbox" name="bahasa[]" value="Java Script"> JavaScript
        <input type="checkbox" name="bahasa[]" value="Python"> Python
        <input type="checkbox" name="bahasa[]" value="PHP"> PHP
        <br><br>
        
        <input type="submit" name="submit" value="Kirim">
    </form>
    
    
    
    
    
    
    
    
    
    
    
    <?php

if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $usia = $_POST['usia'];
        $email = $_POST['email'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $bahasa = isset($_POST['bahasa']) ? $_POST['bahasa'] : array();
        
        $bahasa_str = implode(", ", $bahasa);
        
        // $bahasa_str = false;
        if( $bahasa == array() ){
            echo "Hallo nama saya $nama, saya berumur $usia, jika mau les privat hubungi email $email,
            tanggal lahir saya $tgl_lahir, saya berjenis kelamin $jenis_kelamin, saya belum menguasai bahasa
            pemrograman apapun";
        }else{
            echo "Hallo nama saya $nama, saya berumur $usia, jika mau les privat hubungi email $email,
            tanggal lahir saya $tgl_lahir, saya berjenis kelamin $jenis_kelamin, bahasa pemrograman yang 
            saya kuasai $bahasa_str"; 
     }

    }
    ?>
    
    </body>
    </html>