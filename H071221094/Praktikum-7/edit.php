<?php
// Koneksi ke database
include("config.php");

// Handle edit (pastikan hanya admin yang bisa mengakses)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])) {
    $id_update = $_POST['id_update'];
    $nama_update = $_POST['nama_update'];
    $nim_update = $_POST['nim_update'];
    $prodi_update = $_POST['prodi_update'];

    // Update data mahasiswa
    $check_query = "SELECT id FROM mahasiswa WHERE id = '$id_update'";
    $check_result = $conn->query($check_query);

    if ($check_result->num_rows > 0) {
        $update_query = "UPDATE mahasiswa SET nama='$nama_update', nim='$nim_update', prodi='$prodi_update' WHERE id='$id_update'";

        if ($conn->query($update_query) === TRUE) {
            echo "Data berhasil diupdate!";
            header("Location: index.php");
            exit;
        } else {
            echo "Error: " . $update_query . "<br>" . $conn->error;
        }
    } else {
        echo "ID tidak ditemukan.";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa Data</title>
</head>
<body>
    <h2>Edit Mahasiswa Data</h2>
    <form method="post" action="">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id_update" required><br><br>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama_update" required><br><br>
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim_update" required><br><br>
        <label for="prodi">Prodi:</label>
        <input type="text" id="prodi" name="prodi_update" required><br><br>
        <input type="submit" name="edit" value="edit">
    </form>
</body>
</html>