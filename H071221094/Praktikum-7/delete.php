<?php
// Koneksi ke database
include("config.php");

// Handle delete (pastikan hanya admin yang bisa mengakses)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id_delete = $_POST['id_delete'];
        
    $delete_query = "DELETE FROM mahasiswa WHERE id = '$id_delete'";
    
    if ($conn->query($delete_query) === TRUE) {
        echo "Data berhasil dihapus!";
        header("Location: index.php");
    } else {
         echo "Gagal menghapus data mahasiswa: " . mysqli_error($conn);
        }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Delete Mahasiswa Data</title>
</head>

<body>
    <h2>Delete Mahasiswa Data</h2>
    <form method="post" action="">
        <label for="id">ID:</label>
        <input type="text" name="id_delete" required>
        <input type="submit" name="delete" value="delete">
    </form>
</body>

</html>