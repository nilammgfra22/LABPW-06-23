const readline = require('readline');

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});


function sort(n, arr) {
    if (n !== arr.length){
        return "Jumlah n dengan panjang array tidak sama"
    }
    for (let i = 0; i < n - 1; i++) {
        for (let j = 0; j < n - i - 1; j++) {
            if (arr[j] > arr[j + 1]) {
                // menukar nilai yang lebih kecil ke kiri
                // lebih besar ke kanan
                let temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
        }
    }
    return arr;
}

rl.question("Masukkan n = ", (input1) => {
    let n = parseInt(input1)
    rl.question("masukkan nilai array = ", (input2) => {
        let arr = input2.split(" ").map(item => parseInt(item)) 
        console.log(sort(n, arr));
        rl.close();
    })
})