<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
</head>
<body>
    <!-- HTML No 1-->

    <form method="POST">
    <label for="jenis_barang">Nama jenis barang</label>
    <br>
    <input type="text" name="jenis_barang" id="jenis_barang">
    <br>
    <br>
    <input type="submit" value="TampilkanData">
    <p>Output :</p>
    <br>
    <br>
    <br>
    </form>

    <?php
    $data = [
        [
            "nama_barang" => "HP",
            "harga" => 3000000,
            "stok" => 10,
            "jenis" => "Elektronik"
        ],
        [
            "nama_barang" => "Jeruk",
            "harga" => 5000,
            "stok" => 20,
            "jenis" => "Buah"
        ],
        [
            "nama_barang" => "Kemeja",
            "harga" => 5000,
            "stok" => 9,
            "jenis" => "Pakaian"
        ],
        [
            "nama_barang" => "Apel",
            "harga" => 5000,
            "stok" => 5,
            "jenis" => "Buah"
        ],
        [
            "nama_barang" => "Celana",
            "harga" => 5000,
            "stok" => 10,
            "jenis" => "Pakaian"
        ],
        [
            "nama_barang" => "Laptop",
            "harga" => 50000,
            "stok" => 30,
            "jenis" => "Elektronik"
        ],
        [
            "nama_barang" => "Semangka",
            "harga" => 5000,
            "stok" => 2,
            "jenis" => "Buah"
        ],
        [
            "nama_barang" => "Kaos",
            "harga" => 5000,
            "stok" => 1,
            "jenis" => "Pakaian"
        ],
        [
            "nama_barang" => "VGA",
            "harga" => 2000000,
            "stok" => 0,
            "jenis" => "Elektronik"
        ]
    ];
    // cek apakah nilai variabel sudah ada
    if (isset($_POST['jenis_barang'])) {
        $nama_jenis_barang = $_POST['jenis_barang'];
    
        // filter sebuah array yang sesuai dengan janis yang dimasukkan
        $filter_data = array_filter($data, function ($item) use ($nama_jenis_barang) {
        // mengembalikan substring 
            return stristr($item['jenis'], $nama_jenis_barang);
        });
    
        // Tampilkan tabel dengan data yang sesuai dengan nama jenis barang yang diinput oleh pengguna
        echo "<table border='1'>";
        echo "<tr><th>Nama Barang</th><th>Harga</th><th>Stok</th></tr>";
        foreach ($filter_data as $barang) {
            echo "<tr>";
            echo "<td>" . $barang['nama_barang'] . "</td>";
            echo "<td>" . $barang['harga'] . "</td>";
            echo "<td>" . $barang['stok'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>

</body>
</html>
