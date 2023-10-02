const readline = require('readline');

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

var arr = []
var result = []

var output = ""

function toBinary(num) {
    let binary = "";

    while(num > 0) {
        let remainder = num % 2;
        binary += remainder;
        arr.push(binary)

        num = Math.floor(num / 2);
        binary = ""
    }

    for (let i = 0; i < arr.length; i++) {
        result.push(arr[arr.length - i - 1])
    }

    result.forEach(element => {
        output += element
    });

    return output || "0";
}

rl.question('Masukkan angka (base-10): ', (input) => {
    let num = parseInt(input);
    console.log(`Angka ${num} dalam binary adalah: ${toBinary(num)}`);
    rl.close();
});
