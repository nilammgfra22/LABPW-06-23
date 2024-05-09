<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa Data</title>
</head>
<body>
    <h2>Mahasiswa Data</h2>
<?php
include("config.php");

// Read data mahasiswa
$query = "SELECT * FROM mahasiswa";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Prodi</th>
                    </tr>";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["Nama"] . "</td>
                        <td>" . $row["Nim"] . "</td>
                        <td>" . $row["Prodi"] . "</td>
                        </tr>";

    }

    echo "</table>";
} else {
    echo "Tidak ada data mahasiswa.";
}

// HTML form for input data
?>
    <br>
    <!-- Tampilkan data mahasiswa di sini (Anda perlu menggunakan PHP untuk menampilkan data) -->
    <form action="tambah_mahasiswa.php" method="get">
        <button type="submit">Tambah data</button>
    </form>
    <form action="edit.php" method="get">
        <button type="submit">Edit data</button>
    </form>
    <form action="delete.php" method="get">
        <button type="submit">Hapus data</button>
    </form>
</body>
</html>
