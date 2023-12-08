<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan Diri</title>
</head>
<body>
<table>
        <form method="POST" NAME="input">
            <tr>
                <td><label for="">Nama Lengkap</label></td>
                <td><span>: </span><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="">Usia</label></td>
                <td><span>: </span><input type="text" name="umur" required></td>
            </tr>
            <tr>
                <td><label for="">Email</label></td>
                <td><span>: </span><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td><label for="">Tanggal lahir</label></td>
                <td><span>: </span><input type="date" name="date" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin </td>
                <td><span>: </span>
                    <input type="radio" id="laki" name="gender" value="laki-laki">
                    <label for="laki">Laki-Laki</label>
                    <input type="radio" id="perempuan" name="gender" value="perempuan">
                    <label for="perempuan">Perempuan</label>
                </td>
            <tr>
            <tr>
                <td>Bahasa yang dikuasai </td>
                <td><span>: </span>
                    <input type="checkbox" id="java" name="bahasa[]" value="Java">
                    <label for="bahasa">Java</label>
                    <input type="checkbox" id="phyton" name="bahasa[]" value="Phyton">
                    <label for="bahasa">Phyton</label>
                    <input type="checkbox" id="perl" name="bahasa[]" value="Perl">
                    <label for="bahasa">Perl</label>
                    <input type="checkbox" id="c" name="bahasa[]" value="C">
                    <label for="bahasa">C</label>
                    <input type="checkbox" id="js" name="bahasa[]" value="JavaScript">
                    <label for="bahasa">JavaScript</label>
                    <input type="checkbox" id="php" name="bahasa[]" value="PHP">
                    <label for="bahasa">PHP</label>
                </td>
            <tr>
                <td><input type="submit" value="Input"></td>
            </tr>
    </form>
</table>
<?php 
// mengecek apakah inputan ada kemudian post fungsiny menampilkan
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $nama = $_POST['nama']; 
    $umur = $_POST['umur'];
    $email = $_POST['email'];
//  $tanggal_lahir = $_POST['date'];
// atribut $, j,f,y untuk mnmplkan date yg tertulis kata bulannya
    $tanggal_lahir=date("j F Y", strtotime($_POST['date']));
    $gender = $_POST['gender'];
// isset yaitu mengecek atau memeriksa data
    $bahasa = isset($_POST['bahasa']) ? $_POST['bahasa'] : array();
    $output = "Halo!perkenalkan nama saya $nama, saya berumur $umur tahun,saya lahir pada tanggal $tanggal_lahir, saya berjenis kelamin $gender, "; 
// pengkondisian apakah bhs dlm array(mnyimpan) dan empty(bhs pengguna tdk kosong)
    if (is_array($bahasa) && !empty($bahasa)) {
//  implode;menggabungkan
        $output .= " dan saat ini saya menguasai bahasa pemrograman: " . implode(", ", $bahasa) . ".";
    } else {
        $output .= " dan saat ini saya belum menguasai bahasa pemrograman apapun.";
    }
    if (isset($output)) {
    echo "<p>$output</p>";
    }
}
?>
</body>
</html>