<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>CRUD Functions</title>
</head>
<body>
    <h1>MANAGE DATA</h1><hr>
    <!-- Formulir Tambah Data -->
    <form method="post">
        <h3>ADD DATA</h3>
        <input type="hidden" name="action" value="tambah">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>
        <label for="nim">NIM:</label>
        <input type="text" name="nim" required><br>
        <label for="prodi">Prodi:</label>
        <input type="text" name="prodi" required><br>
        <button type="submit">Tambah Data</button>
    </form>
    <br>

    <!-- Tampilkan Data -->
    <form method="post">
        <h3>SHOW DATA</h3>
        <input type="hidden" name="action" value="tampil">
        <button type="submit">Tampilkan Data</button>
    </form>
    <br>

    <!-- Perbarui Data -->
    <form method="post">
        <h3>UPDATE DATA</h3>
        <input type="hidden" name="action" value="perbarui">
        <label for="id">ID Data:</label>
        <input type="text" name="id" required><br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>
        <label for="nim">NIM:</label>
        <input type="text" name="nim" required><br>
        <label for="prodi">Prodi:</label>
        <input type="text" name="prodi" required><br>
        <button type="submit">Perbarui Data</button>
    </form>
    <br>

    <!-- Hapus Data -->
    <form method="post">
        <h3>DELETE DATA</h3>
        <input type="hidden" name="action" value="hapus">
        <label for="id">ID Data:</label>
        <input type="text" name="id" required><br>
        <button type="submit">Hapus Data</button>
    </form>
    <br>

<?php
$server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "db_mahasiswa";

// Fungsi Create (Insert)
function tambahData($nama, $nim, $prodi) {
    global $server, $db_username, $db_password, $db_name; // untuk deklarasikan variabel yang didefinisikan diluar fungsi sebagai variabel global dalam konteks fungsi. VAR GLOBAL spy bisa diakses dimana sj
    $conn = new mysqli($server, $db_username, $db_password, $db_name); // u koneksi datanya dan simpan ke database 

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "INSERT INTO tb_mahasiswa (Nama, NIM, Prodi) VALUES (?, ?, ?)"; //untuk lakukan operasi INSERT(masukkan data) pada tabel "mahasiswa" dalam database. (?) sebagai tanda tempat parameter akan diikat nanti.
    $stmt = $conn->prepare($sql); //untuk siapkan pernyataan SQL menggunakan objek koneksi ke database yang telah dibuat sebelumnya. 
    $stmt->bind_param("sss", $nama, $nim, $prodi); //untuk ikat variabel dalam parameter di penrnyataan yg sdh ada

    $result = $stmt->execute();

    $stmt->close();
    $conn->close();

    return $result;
}

// Fungsi Read (Select)
function ambilDataMahasiswa() {
    global $server, $db_username, $db_password, $db_name;
    $conn = new mysqli($server, $db_username, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "SELECT  id, Nama, NIM, Prodi FROM tb_mahasiswa";
    $result = $conn->query($sql); //u jalankan pernyataan SQL SELECT yang telah didefinisikan dalam variabel $sql terhadap objek koneksi database $conn.
    $data = array(); //untuk deklarasikan variabel $data sebagai sebuah array kosong.

    if ($result->num_rows > 0) { //jika hasilnya punya numrows lebih besar 0 maka dieksekusi dibwh
        while ($row = $result->fetch_assoc()) { //untuk ambil satu baris data dari hasil query dalam bentuk array asosiatif. Hasilnya akan disimpan dalam variabel $row sebagai array asosiatif
            $data[] = $row; //u ambil data yang sudah disimpan di var row ke dalam array
        }
    }

    $conn->close();
    return $data;
}

// Menampilkan data dalam bentuk tabel HTML
function tampilkanTabelMahasiswa() {
    $dataMahasiswa = ambilDataMahasiswa();

    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Nama</th>';
    echo '<th>NIM</th>';
    echo '<th>Prodi</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($dataMahasiswa as $row) {
        echo '<tr>';
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['Nama']}</td>";
        echo "<td>{$row['NIM']}</td>";
        echo "<td>{$row['Prodi']}</td>";
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
}

// Fungsi Update
function perbaruiData($id, $nama, $nim, $prodi) {
    global $server, $db_username, $db_password, $db_name;

    $conn = new mysqli($server, $db_username, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "UPDATE tb_mahasiswa SET Nama=?, NIM=?, Prodi=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nama, $nim, $prodi, $id);

    $result = $stmt->execute();

    $stmt->close();
    $conn->close();

    return $result;
}

// Fungsi Delete
function hapusData($id) {
    global $server, $db_username, $db_password, $db_name;

    $conn = new mysqli($server, $db_username, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $sql = "DELETE FROM tb_mahasiswa WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    $result = $stmt->execute();

    $stmt->close();
    $conn->close();

    return $result;
}

// Menangani Form Submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action"])) {
        $action = $_POST["action"];

        switch ($action) {
            case 'tambah':
                if (isset($_POST["nama"]) && isset($_POST["nim"]) && isset($_POST["prodi"])) {
                    tambahData($_POST["nama"], $_POST["nim"], $_POST["prodi"]);
                } else {
                    echo "Isi semua kolom!";
                }
                break;

            case 'tampil':
                tampilkanTabelMahasiswa();
                break;

            case 'perbarui':
                if (isset($_POST["id"]) && isset($_POST["nama"]) && isset($_POST["nim"]) && isset($_POST["prodi"])) {
                    perbaruiData($_POST["id"], $_POST["nama"], $_POST["nim"], $_POST["prodi"]);
                } else {
                    echo "Isi semua kolom!";
                }
                break;

            case 'hapus':
                if (isset($_POST["id"])) {
                    hapusData($_POST["id"]);
                } else {
                    echo "ID tidak valid!";
                }
                break;
            
            default:
                echo 'Aksi tidak valid';
                break;
        }
    }
}
?>