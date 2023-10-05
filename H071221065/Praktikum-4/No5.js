// N0 5 

function FunctionToBinary(nomor) {
    if (nomor === 0) {
        return 0;
    }

    let binary = '';
    while (nomor > 0) {
        const remainder = nomor % 2;
        binary = remainder + binary;

        nomor = Math.floor(nomor / 2);
    }
    return binary;
}

const nomorNumber = 31; 

const binaryNumber = FunctionToBinary(nomorNumber);
console.log("Angka biner dari " + nomorNumber + " adalah : " + binaryNumber);