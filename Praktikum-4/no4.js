//NO 4 buat perkondisian baru spy bs menerima batas inputan
// let angka = prompt("input panjang array: ")
// let list = prompt("input angka:").split(" ").map((str) => parseInt(str)) //split u pecah input jdi array dan bs dipisah pke spasi, map untuk ubah semua elemen dalam array jdi tipde data int

// for (let i of list){
//     for (let j = 0; j < list.length; j++) {  //untuk membandingkan dan menukar elemen dalam array, var j sebagai indeksnya
//         if (list[j] > list[j + 1]) {
//             let temp = list[j] //spy angkanya klo lebih besar masuk ke kanan, setelah temp digunakan var semntara disimpan di J trus diganti ke baris selanjutnya
//             list[j] = list[j + 1]
//             list[j + 1] = temp
//         }
//     }
// }
// alert(list)
let panjangArray = prompt("Input panjang array: ");
let list = prompt("Input angka:").split(" ").map((str) => parseInt(str));

// Memeriksa apakah panjang array sesuai dengan input
if (list.length !== parseInt(panjangArray)) {
    alert("Jumlah elemen dalam array tidak sesuai dengan panjang yang diinput.");
} else {
    // Algoritma pengurutan
    for (let i = 0; i < list.length - 1; i++) {
        for (let j = 0; j < list.length - i - 1; j++) {
            if (list[j] > list[j + 1]) {
                let temp = list[j];
                list[j] = list[j + 1];
                list[j + 1] = temp;
            }
        }
    }

    alert(list);
}
