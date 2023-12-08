function withoutSort(angka) {
    for (let i = 0; i < angka.length - 1; i++) {
        for (let j = 0; j < angka.length - i - 1; j++) {
            if (angka[j] > angka[j + 1]) {
                let temp = angka[j];
                angka[j] = angka[j + 1];
                angka[j + 1] = temp;
            }
        }
    }
    return angka;
}

const n = 5;
const inputNumbers = [50, 20, 1, 45, 3];

const sortedNumbers = withoutSort(inputNumbers.slice());+
console.log("Angka sebelum diurutkan : " + inputNumbers.join(', '));
console.log("Angka setelah diurutkan : " + sortedNumbers.join(', '));