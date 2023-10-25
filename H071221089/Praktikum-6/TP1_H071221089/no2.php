dccal
dccal
Do Not Disturb

البروفيسور دكتور. آندي محمد هيكل — 13/10/2023 22:50
@Who?
https://store.steampowered.com/app/2543300/Joy_Life_2/?snr=1_4_4__145_2
Steam
Joy Life 2
Game introductionAlthough being sick and hospitalized is not something worth celebrating, as the most involved employee in the company, due to the accumulation of long overtime work, he was finally overwhelmed and fell ill... but he gave himself a short vacation.The company hired a nurse to take care of your daily life for you, and she left a de...
Price
$2.79
gamenya joy
البروفيسور دكتور. آندي محمد هيكل — 14/10/2023 21:31
emang boleh @H3nry
H3nry — Yesterday at 00:58
turu bang @Piscok
البروفيسور دكتور. آندي محمد هيكل — Yesterday at 01:00
Parah
H3nry — Yesterday at 01:04
hilang kemana ko tdi ?
البروفيسور دكتور. آندي محمد هيكل — Yesterday at 01:06
Kau yang hilang anjir
H3nry — Yesterday at 01:08
lahh , padahal baruja pejamkan mata sekejap
pas ku buka , anda sdh hilang
Who? — Yesterday at 01:09
Pejamkan mata sekaligus time skip
H3nry — Yesterday at 01:09
wkwkwk
Naaoi — Yesterday at 09:24
agak laen @Nito
Image
البروفيسور دكتور. آندي محمد هيكل — Yesterday at 14:24
Tutorial bunuh diri
Nito — Yesterday at 14:44
subathon bang
البروفيسور دكتور. آندي محمد هيكل — Yesterday at 16:22
Link saweria
Nito — Yesterday at 17:09
setelah 17 - 3 jam, gejala yang gw dapat sakit kepala dan mudah terbawa emosi
Image
البروفيسور دكتور. آندي محمد هيكل — Yesterday at 17:09
Kok lu ngak ngajak gw juga sih
Naaoi — Yesterday at 17:09
Keren sekarang sentuh rumput
Nito — Yesterday at 17:11
the real "dedikasi"
udah sentuh rumpuit gw barusan aja kembali kerumah
Naaoi — Yesterday at 17:12
Bagus skrg lanjut main
Nito — Yesterday at 17:13
udah lelah bang
Naaoi — Yesterday at 17:13
Image
Nito — Yesterday at 17:14
@البروفيسور دكتور. آندي محمد هيكل gw mabar sama teman-teman wt gw di dc sebelah vbang
البروفيسور دكتور. آندي محمد هيكل — Yesterday at 17:54
Oh gitu ya bro
Seandainya gw join sirkel
Aku pasti di ajak
Nda cuk,menyerahma bikin bustergacor @H3nry @Who?
Who? — Yesterday at 17:57
aowkoakwooakwk anjr
sekeren apa mh web mu coo wkwk
klo mubuat video ituu
ada berapa kemungkinan itu hrus mu buatkan video smua wkwk
Enoch — Yesterday at 20:42
Ngerinya
البروفيسور دكتور. آندي محمد هيكل — Yesterday at 22:25
dc @Who? @H3nry
Who? — Yesterday at 22:37
gass
Who? — Yesterday at 22:52
@البروفيسور دكتور. آندي محمد هيكل bang
البروفيسور دكتور. آندي محمد هيكل — Yesterday at 22:58
manako @H3nry
Who? — Yesterday at 23:06
https://www.youtube.com/watch?v=Spw7PCdlV7c&ab_channel=TinyyTonyy
YouTube
TinyyTonyy
FIGHT ME DEMON! GET OUTTA HERE BROTHERS! (ORIGINAL)
Image
@everyone gesss
Image
mabarrr
البروفيسور دكتور. آندي محمد هيكل — Today at 00:23
Emang boleh
Image
Sal1 — Today at 00:31
wat the hell
Who? — Today at 02:37
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 2</title>
Expand
no2.php
5 KB
Who? — Today at 02:50
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
... (11 lines left)
Collapse
no1.php
3 KB
dahhh
Naaoi — Today at 04:29
busettt
Enoch — Today at 08:16
Image
Naaoi — Today at 08:17
﻿
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
no2.php
5 KB