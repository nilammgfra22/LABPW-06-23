<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 6</title>
</head>
<body>

    <div class="container">
        <form>
            <input name="input" placeholder="Masukkan tipe" required>
            <button type="submit">Submit</button>
        </form>
    </div>

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
    
    $filteredData = []; //inisialisasi utk menyimpan data
    
    if (isset($_GET['input'])) { //isset utk memeriksa apakah suatu variabel telah didefinisikan dan memiliki nilai.
        $tipe = strtolower($_GET['input']); //Jika parameter "input" ada, maka nilainya diambil dan disimpan dalam variabel $tipe. Fungsi strtolower digunakan untuk mengonversi nilai tersebut menjadi huruf kecil (lowercase), sehingga tidak ada perbedaan antara huruf besar dan kecil dalam pemrosesan selanjutnya.
    
        foreach ($data as $item) {
            if (strtolower($item['jenis']) === $tipe) {
                $filteredData[] = $item;
            }
        }
    }
    echo "<table border='2'><tr>";
    foreach ($data[0] as $key => $value) { //mengasumsikan bahwa array ini memiliki elemen pertama yang akan digunakan sebagai referensi untuk nama kolom dalam tabel)
    echo "<th>". ucfirst($key) . "</th>";
    }
    echo "</tr>";

    if (isset($_GET['input'])) {  // Menggunakan $_GET untuk memeriksa input
        $tipe = strtolower($_GET['input']);

        foreach ($filteredData as $barang) {
            echo "<tr>
                <td>" . $barang['nama_barang'] . "</td>
                <td>" . $barang['harga'] . "</td>
                <td>" . $barang['stok'] . "</td>
                <td>" . ucfirst($barang['jenis']) . "</td>
            </tr>";
        }
    }
    echo "</table>";
    ?>

</body>
</html>