
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 2</title>
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

    function filterDataByJenis($data, $jenis) {
        $filteredData = [];
        foreach ($data as $item) {
            if ($item["jenis"] == $jenis) {
                $filteredData[] = $item;
            }
        }
        return $filteredData;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["jenis"])) {
        $jenis = $_POST["jenis"];
        $filteredData = filterDataByJenis($data, $jenis);
    } else {
        $filteredData = [];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 1</title>
</head>
<body>
    <form method="POST">
        <label for="jenis">Jenis:</label>
        <input type="text" name="jenis" id="jenis">
        <button type="submit">Submit</button>
    </form>
    <table border=1>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($filteredData)) : ?>
                <?php foreach ($filteredData as $item) : ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 2</title>
</head>
<body>
    <h1>Form</h1>
    <form method="post">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Usia</td>
                <td>:</td>
                <td><input type="int" name="usia" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td>:</td>
                <td><input type="date" name="ttl" required></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>:</td>
                <td>
                    <label for="cowok">Laki-Laki</label>
                    <input type="radio" id="cowok" name="gender" value="man" required>
                    
                    <label for="cewek">Perempuan</label>
                    <input type="radio" id="cewek" name="gender" value="woman" required>
                </td>
            </tr>
            <tr>
                <td>Bahasa yang dikuasai</td>
                <td>:</td>
                <td>
                    <input type="checkbox" id="option1" name="choices[]" value="Java">
                    <label for="option1">Java</label>

                    <input type="checkbox" id="option2" name="choices[]" value="Python">
                    <label for="option2">Python</label>

                    <input type="checkbox" id="option3" name="choices[]" value="HTML">
                    <label for="option3">HTML</label>

                    <input type="checkbox" id="option4" name="choices[]" value="CSS">
                    <label for="option3">CSS</label>

                    <input type="checkbox" id="option5" name="choices[]" value="JavaScript">
                    <label for="option3">JavaScript</label>

                    <input type="checkbox" id="option6" name="choices[]" value="PHP">
                    <label for="option3">PHP</label>
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $usia = $_POST['usia'];
            $kata1 = "Halo! Perkenalkan nama saya " . $nama . ", saya berumur " . $usia . " tahun, ";

            $date = $_POST['ttl'];
            $tanggal = date("d", strtotime($date));
            $bulan = [
                '01' => 'januari',
                '02' => 'februari',
                '03' => 'maret',
                '04' => 'april',
                '05' => 'mei',
                '06' => 'juni',
                '07' => 'juli',
                '08' => 'agustus',
                '09' => 'september',
                '10' => 'oktober',
                '11' => 'november',
                '12' => 'desember'
            ];
            $tahun = date("Y", strtotime($date));
            $kata2 = "saya lahir pada tanggal " . $tanggal . " " . $bulan[date("m", strtotime($date))] . " tahun " . $tahun . ", ";

            $gender = $_POST["gender"];
            if ($gender == "man") {
                $kata3 = "saya berjenis kelamin Laki-laki ";
            } elseif ($gender == "woman") {
                $kata3 = "saya berjenis kelamin Perempuan ";
            }

            $bahasa = $_POST["choices"];
            if (count($bahasa) > 1) {
                $bahasa_terakhir = end($bahasa);
                array_pop($bahasa);
            }
            if (count($bahasa) > 0) {
                $kata4 = "dan saat ini saya berhasil menguasai bahasa pemrograman " . implode(", ", $bahasa) . ", dan " . $bahasa_terakhir;
            } else {
                $kata4 = "dan saat ini saya belum menguasai bahasa pemrograman apapun.";
            }
            echo $kata1 . $kata2 . $kata3 . $kata4;
        }
    ?>
</body>
</html>
