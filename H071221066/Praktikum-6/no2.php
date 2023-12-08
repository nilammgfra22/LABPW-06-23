<!DOCTYPE html>
<html>

<head>
    <title>Formulir Perkenalan - H071221066</title>
</head>

<body>
    <h1>Formulir Perkenalan</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <td><label for="nama">Nama </label></td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="usia">Usia</label></td>
                <td><input type="number" name="usia" required></td>
            </tr>
            <tr>
                <td><label for="email">Email </label></td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="tanggalLahir">Tanggal Lahir </label></td>
                <td><input type="date" name="tanggalLahir" required></td>
            </tr>
            <tr>
                <td><label for="jenisKelamin">Jenis Kelamin </label></td>
                <td>
                    <input type="radio" name="jenisKelamin" value="Laki-laki" required> Laki-laki
                    <input type="radio" name="jenisKelamin" value="Perempuan" required> Perempuan
                </td>
            </tr>
            <tr>
                <td><label for="bahasa[]">Bahasa Pemrograman yang Dikuasai </label></td>
                <td>
                    <input type="checkbox" name="bahasa[]" value="PHP"> PHP
                    <input type="checkbox" name="bahasa[]" value="PYTHON"> PYTHON
                    <input type="checkbox" name="bahasa[]" value="JAVA"> JAVA
                    <input type="checkbox" name="bahasa[]" value="C++"> C++
                    <input type="checkbox" name="bahasa[]" value="PERL"> PERL
                </td>
            </tr>
        </table>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $usia = $_POST["usia"];
        $email = $_POST["email"];
        $tanggalLahir = $_POST["tanggalLahir"];
        $jenisKelamin = $_POST["jenisKelamin"];

        $bahasa = isset($_POST["bahasa"]) ? $_POST["bahasa"] : [];

        //konversi tanggal 
        $tanggalLahir = date("d F Y", strtotime($tanggalLahir));

        $perkenalan = "Halo, nama saya $nama, saya berumur $usia tahun, saya lahir pada $tanggalLahir, saya berjenis kelamin $jenisKelamin, alamat email saya adalah $email ";

        if (!empty($bahasa)) {
            $perkenalan .= "dan saat ini saya berhasil menguasai bahasa pemrograman: " . implode(", ", $bahasa);
        } else {
            $perkenalan .= "dan saat ini saya belum menguasai bahasa pemrograman apapun.";
        }

        echo "<p>$perkenalan</p>";
    }
    ?>
</body>

</html>