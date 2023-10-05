//1

let a = parseInt(prompt("Masukkan angka pertama :"))
let b = parseInt(prompt("Masukkan angka pangkat :"))
let c = a**b

alert(c);

//let a = parseInt(prompt("Masukkan angka pertama :")): Ini adalah baris pertama kode. 
// Ini mendeklarasikan variabel a dan menggunakan fungsi parseInt untuk mengubah input yang diterima dari
// pengguna (melalui fungsi prompt) menjadi bilangan bulat. Pesan "Masukkan angka pertama :" akan muncul di 
// jendela prompt, dan apa pun yang dimasukkan oleh pengguna akan diubah menjadi bilangan bulat dan disimpan 
// dalam variabel a.

// let b = parseInt(prompt("Masukkan angka pangkat :")): Ini adalah baris kedua kode yang hampir sama dengan
// baris pertama. Ini mendeklarasikan variabel b dan juga mengambil input dari pengguna untuk bilangan pangkat 
// yang akan digunakan dalam perhitungan.

// let c = a**b: Baris ini melakukan operasi perpangkatan. Variabel c akan berisi hasil dari a 
// dipangkatkan dengan b. Ini akan menghitung a pangkat b.

// alert(c): Baris ini menampilkan hasil perhitungan (c) dalam sebuah jendela alert
// yang akan muncul di browser atau lingkungan eksekusi JavaScript. Pengguna akan melihat hasil 
// perpangkatan a pangkat b sebagai pesan dalam jendela alert.

//2

let karakter = prompt("Masukkan inputan : ").split("");
let geser = parseInt(prompt("angka untuk geser setiap huruf "))

let new_karakter = ""

for (let i of karakter) {
    if (/[a-z]/.test(i)) {
        new_karakter += String.fromCharCode((((i.charCodeAt(0) + geser - 97) % 26) + 97))
    } else if (/[A-Z]/.test(i)) {
        new_karakter += String.fromCharCode((((i.charCodeAt(0) + geser - 65) % 26) + 65))
    } else {
        new_karakter += " "
    }
}

alert(new_karakter);

//Berikut adalah penjelasan lebih detail mengenai kode ini:

// let karakter = prompt("Masukkan inputan : ").split("");: Kode ini meminta pengguna untuk
// memasukkan sebuah inputan teks melalui fungsi prompt dan kemudian mengubah inputan tersebut menjadi 
// sebuah array karakter dengan menggunakan method .split(""). Setiap karakter dalam inputan akan menjadi 
// elemen dalam array karakter.

// let geser = parseInt(prompt("angka untuk geser setiap huruf ")): Kode ini meminta pengguna untuk 
// memasukkan sebuah angka yang akan digunakan untuk menggeser setiap huruf dalam inputan. 
// Angka tersebut diubah menjadi tipe data integer dengan menggunakan parseInt().

// let new_karakter = "": Ini adalah string kosong yang akan digunakan untuk menyimpan 
// karakter-karakter yang telah digeser.

// Selanjutnya, terdapat sebuah loop for...of yang akan mengiterasi melalui setiap karakter dalam array karakter.

// Di dalam loop, terdapat beberapa kondisi:

// if (/[a-z]/.test(i)): Ini adalah kondisi yang memeriksa apakah karakter saat ini adalah huruf kecil (a-z) 
// dengan menggunakan ekspresi reguler /[a-z]/.test(i).
// Jika iya, maka karakter tersebut akan digeser. Proses geser ini dilakukan dengan mengubah kode ASCII 
// karakter tersebut. Misalnya, karakter 'a' akan digeser sebanyak geser langkah, dan hasilnya akan dibatasi
// agar tetap dalam rentang a-z. Ini dilakukan dengan menggunakan rumus:

// ((((i.charCodeAt(0) + geser - 97) % 26) + 97))
// else if (/[A-Z]/.test(i)): 
// Ini adalah kondisi yang mirip, tetapi memeriksa apakah karakter saat ini adalah huruf besar (A-Z).
// Jika iya, karakter tersebut juga akan digeser dengan rumus yang sama seperti huruf kecil.
// else: Jika karakter saat ini bukan huruf (misalnya spasi atau karakter khusus), maka karakter tersebut 
// akan digantikan dengan spasi dalam string new_karakter. Setiap karakter yang sudah digeser atau diubah 
// kemudian ditambahkan ke dalam string new_karakter.

//i.charCodeAt(0) + geser - 97: Ini mengambil kode Unicode dari karakter tersebut, menggeser kode tersebut sebanyak geser,
// dan mengurangkan 97 (kode Unicode dari huruf 'a') agar perhitungan dilakukan dalam kisaran 0-25.
//((i.charCodeAt(0) + geser - 97) % 26) + 97: Ini memastikan bahwa hasil geser tetap 
//berada dalam kisaran huruf kecil (a-z) dengan mengambil sisa bagi 26 dari hasil sebelumnya dan 
//menambahkan 97 untuk mengembalikannya ke kisaran huruf kecil ASCII.

// Setelah loop selesai, hasil akhir dari geser karakter akan ditampilkan dalam sebuah alert.



3

let text = prompt("Kata : ").toLocaleLowerCase();
let reverse = "";

for (let i of text) {
    reverse = i + reverse;
}

if (reverse === text) {
    alert("Palindrom");
} else {
    alert("Bukan");
}

// let text = prompt("Kata : ").toLocaleLowerCase();: Kode ini meminta pengguna untuk memasukkan 
//sebuah kata atau frasa melalui fungsi prompt. Inputan tersebut kemudian diubah menjadi huruf kecil 
//semua dengan menggunakan toLocaleLowerCase(). Hal ini dilakukan agar pemrosesan kata atau frasa tidak bersifat 
//case-sensitive, artinya huruf besar dan kecil dianggap sama.

// let reverse = "";: Variabel reverse digunakan untuk menyimpan kata atau frasa yang sudah
//diubah menjadi bentuk terbalik (reversed).
// Selanjutnya, terdapat sebuah loop for...of yang akan mengiterasi melalui setiap karakter dalam text.
// Di dalam loop, setiap karakter i akan ditambahkan di depan string reverse. Dengan cara ini, karakter-karakter 
//akan diambil dari akhir ke awal, sehingga reverse akan berisi kata atau frasa dalam bentuk terbalik 
//setelah loop selesai.
// Setelah loop selesai, dilakukan pengecekan apakah reverse (kata atau frasa dalam bentuk terbalik) 
//sama dengan text (kata atau frasa asli). Jika sama, maka ini menandakan bahwa kata atau frasa tersebut 
//adalah palindrom.
// Jika reverse sama dengan text, maka akan muncul pesan "Palindrom" menggunakan alert. Jika tidak sama, 
//maka akan muncul pesan "Bukan".

4
let list = prompt("Masukkan angka dengan pemisah spasi").split(" ").map((str) => parseInt(str))

for (let i in list){
    for (let j = 0; j < list.length; j++) {
        if (list[j] > list[j + 1]) {
            let temporary = list[j]
            list[j] = list[j + 1]
            list[j + 1] = temporary
        }
    }
}

alert(list);

// let list = prompt("Masukkan angka dengan pemisah spasi").split(" ").map((str) => parseInt(str)): Kode ini
// akan menampilkan sebuah prompt yang memungkinkan pengguna memasukkan beberapa angka, dipisahkan oleh spasi.
// Kemudian, input tersebut akan dipecah menjadi sebuah array menggunakan metode split dengan spasi sebagai 
//pemisah. Setiap elemen array akan diubah menjadi integer menggunakan map.


// Kode selanjutnya digunakan untuk mengurutkan elemen-elemen dalam 
//array list yang telah dibuat:
// Terdapat dua loop bersarang: Loop luar (dengan variabel i) dan loop dalam (dengan variabel j).

// Loop luar (for (let i in list)) digunakan untuk mengulangi langkah-langkah pengurutan sebanyak elemen
// dalam array (sama dengan jumlah elemen dalam array).

// Loop dalam (for (let j = 0; j < list.length; j++)) digunakan untuk membandingkan dan menukar
// elemen-elemen dalam array. Loop ini akan melakukan perbandingan antara list[j] dan list[j + 1] untuk
// setiap pasangan elemen dalam array.

// Jika list[j] lebih besar dari list[j + 1], maka keduanya akan ditukar menggunakan variabel 
//sementara (temporary).

// Proses pengulangan ini akan terus berlanjut sampai seluruh array dianggap terurut. 
//Dalam setiap iterasi loop luar, elemen terbesar akan naik ke posisi yang benar.



// 5
let angka = parseInt(prompt("Masukkan Angka : "))
let binary = " "
//variabel tempat sebagai perantara di perulangan

while (true){
    binary = String(angka % 2) + binary
    angka = Math.floor(angka / 2)
    if (angka === 0) {
        //
        break
    } 
}

alert(binary);

// let angka = parseInt(prompt("Masukkan Angka : ")): Kode ini meminta pengguna untuk 
//memasukkan angka desimal melalui prompt, kemudian mengonversinya ke dalam bentuk integer 
//menggunakan parseInt.

// let binary = "": Variabel binary digunakan untuk menyimpan representasi biner dari
// angka yang akan dikonversi. Awalnya, variabel ini kosong.

// while (true) { ... }: Ini adalah sebuah loop tak terbatas yang akan berjalan selama kondisi true. 
//Loop ini akan terus berjalan hingga kondisi if (angka === 0) terpenuhi, di mana angka desimal sudah
// habis dikonversi menjadi bilangan biner.

// Di dalam loop, langkah-langkah berikut dilakukan:

// binary = String(angka % 2) + binary: Bagian ini mengambil sisa pembagian (angka % 2) dari
// angka desimal saat ini, mengonversinya menjadi string (dengan String()), dan kemudian menambahkannya 
//ke depan variabel binary. Ini adalah langkah untuk mengambil digit biner yang sesuai dengan sisa pembagian.

// angka = Math.floor(angka / 2): Langkah ini membagi angka desimal saat ini dengan 2 menggunakan Math.floor()
// untuk mendapatkan hasil pembagian bulat. Ini akan mengurangi angka desimal saat ini menjadi setengahnya. Proses ini akan berulang hingga angka desimal mencapai 0, yang merupakan kondisi untuk menghentikan loop.

// if (angka === 0) { break }: Ini adalah kondisi untuk menghentikan loop jika angka desimal sudah mencapai 0,
// yang berarti semua digit biner sudah ditemukan.

// Setelah loop selesai, variabel binary akan berisi representasi bilangan biner dari angka 
//desimal yang dimasukkan pengguna.

// Terakhir, alert(binary) akan menampilkan hasil representasi bilangan biner kepada pengguna 
//melalui pesan alert.