function hitungPangkat(angka, pangkat) {
    if (pangkat === 0) {
        return 1;
    }

    let hasil = 1;
    for (let i = 1; i <= pangkat; i++) {
        hasil *= angka;
    }
    return hasil;
}

let hasil1 = hitungPangkat(2, 0);
console.log("2^0 = " + hasil1);

let hasil2 = hitungPangkat(3, 4);
console.log("3^4 = " + hasil2);