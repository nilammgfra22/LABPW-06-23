<?php
// Koneksi ke database
include("config.php");

// Inisialisasi variabel-variabel
$nama = "";
$nim = "";
$prodi = "";

// Handle penambahan data mahasiswa (pastikan hanya admin yang bisa mengakses)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tambah'])) {
    $nama = $_POST['Nama'];
    $nim = $_POST['Nim'];
    $prodi = $_POST['Prodi'];

    // Insert data mahasiswa
    $sql = "INSERT INTO mahasiswa (nama, nim, prodi) VALUES ('$nama', '$nim', '$prodi')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Ambil data mahasiswa yang baru saja ditambahkan dari database
        $sql = "SELECT * FROM mahasiswa WHERE nim='$nim'";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result)) {
            $row = mysqli_fetch_assoc($result);
            // Tampilkan data mahasiswa yang baru ditambahkan
            echo "Data mahasiswa baru ditambahkan:<br>";
            echo "Nama: " . $row['Nama'] . "<br>";
            echo "NIM: " . $row['Nim'] . "<br>";
            echo "Prodi: " . $row['Prodi'] . "<br>";
        } else {
            echo "Gagal mengambil data mahasiswa yang baru ditambahkan.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form method="post" action="">
        <label for="Nama">Nama:</label>
        <input type="text" id="Nama" name="Nama" value="<?php echo $nama; ?>" required><br><br>
        <label for="Nim">NIM:</label>
        <input type="text" id="Nim" name="Nim" value="<?php echo $nim; ?>" required><br><br>
        <label for="Prodi">Prodi:</label>
        <input type="text" id="Prodi" name="Prodi" value="<?php echo $prodi; ?>" required><br><br>
        <input type="submit" name="tambah" value="Tambah Data">
    </form>
    <a href="edit.php">edit data</a><br>
    <a href="delete.php">Hapus</a>
</body>
</html>