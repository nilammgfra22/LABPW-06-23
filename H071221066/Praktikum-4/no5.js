function binary(angka) {
    if (angka === 0) {
        return 0;
    }

    let binary = '';
    while (angka > 0) {
        const remainder = angka % 2;
        binary = remainder + binary;
        angka = Math.floor(angka / 2);             
    }
    return binary;
}

const angka1 = 14;
const binaryNumber = binary(angka1);
console.log("Representasi biner dari " + angka1 + " adalah : " + binaryNumber);
