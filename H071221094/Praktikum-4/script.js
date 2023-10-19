// function pangkat(angka, eksponen) {
//     let hasil = 1;
//     for (let i = 0; i < eksponen; i++) {
//         hasil *= angka;
//     }
//     return hasil;
// }

// const angka = parseInt(prompt("Masukkan angka: "));
// const eksponen = parseInt(prompt("Masukkan eksponen: "));
  
// const hasil_pangkat = pangkat(angka, eksponen);
// alert(`${angka} pangkat ${eksponen} adalah ${hasil_pangkat}`);



//=================================================================================================//
// No 2.

// function CipherEncrypt(text, shift) {
    
//     let encryptedText = '';
  

//     for (let i = 0; i < text.length; i++) {
//       let char = text[i];
  
//       if (/[a-zA-Z]/.test(char)) {
//         //cek apaakah alphabetnya huruf kecil atau besar jika besar maka dia true jika false 
//         // hurufnya akan di kembalikan ke huruf kecil
//         const isUpperCase = char === char.toUpperCase(); 
//         // char kode default 0 mengambil nilai ASCII
//         const charCode = char.charCodeAt(0);
//         //65 merupakan huruf besar dan 97 huruf kecil trus + langkah sisa pembagian 26 karna abjad ada 26
//         // jika sudah di dapat maka nilai dari 65:97 di kurangkan lagi dengan nilai dari kapital atau bukan
//         // misal dia kapital berarti 65-65 yang dimulai dari indeks 0
//         const shiftedCharCode = ((charCode - (isUpperCase ? 65 : 97) + shift) % 26) + (isUpperCase ? 65 : 97);
//         //mengubah kode ASCII tadi ke dalam sebuah string
//         const shiftedChar = String.fromCharCode(shiftedCharCode);
//         encryptedText += shiftedChar;
//       } else {
//         alert("Inputan tidak boleh disertai angka")
//       }
//     }
//     return encryptedText;
//   }
  
//   // inputan
//   const plaintext = prompt("Masukkan kata : ");
//   const shiftAmount = parseInt(prompt("Pergeseran : "))
//   const ciphertext = CipherEncrypt(plaintext, shiftAmount);
//   // output 
//   // alert("Hasil pergeseran : " + ciphertext)
//   alert("Hasil pergeseran : " + ciphertext)



// //===================================================================================
// // No 3
//   function isPalindrome(word) {
//     // mengubah kapital menjadi huruf kecil
//     word = word.toLowerCase().replace(/ /g, '');
//     // megnubah kata dalam bentuk array, dan membalikkan kata, lalu menggabungkan kata ke dalam sebuah string
//     const hasil = word.split('').reverse().join('');
//    return word === hasil;
// }

// function checkPalindrome() {
//     const inputKata = document.getElementById('inputKata').value;
//     const resultElement = document.getElementById('result')
//     if (isPalindrome(inputKata)) {
//         resultElement.textContent = `${inputKata} adalah palindrom.`;
//     } else {
//         resultElement.textContent = `${inputKata} bukan palindrom.`;
//     }
// }

// [N0 4]======================================================

function bubbleSort(arr) {
    let n = arr.length;
    for (let i = 0; i < n - 1; i++) {
        for (let j = 0; j < n - i - 1; j++) {
            if (arr[j] > arr[j + 1]) {
                let temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
        }
    }
}

const readline = require('readline');

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

rl.question('Masukkan jumlah angka: ', (n) => {
    n = parseInt(n);
    const numbers = [];

    const inputNumber = (i) => {
        rl.question(`Masukkan angka ke-${i + 1}: `, (num) => {
            numbers.push(parseInt(num));
            if (i < n - 1) {
                inputNumber(i + 1);
            } else {
                bubbleSort(numbers);
                console.log('Angka yang diurutkan:');
                console.log(numbers.join(' '));
                rl.close();
            }
        });
    };

    inputNumber(0);
});
 


// [no. 5]===================================================================
// Fungsi untuk mengonversi angka desimal ke biner
// function nilaiBinary(decimal) {
//   // akan mengembalikan angka 0 jika inputannya 0
//   if (decimal === 0) {
//       return '0';
//   }
//   // memeasukkan angka ke dalam var binary setelah di eksekusi
//   let binary = '';
//   while (decimal > 0) {
//       const remainder = decimal % 2;
//       binary = remainder + binary;
//       decimal = Math.floor(decimal / 2);
//   }
  
//   return binary;
// }

// // Mengambil input angka desimal dari pengguna
// let inputDecimal = prompt("Masukkan angka :");
// let decimalNumber = parseInt(inputDecimal);

// if (!isNaN(decimalNumber)) {
//   var binaryNumber = nilaiBinary(decimalNumber);
//   alert("Angka " + decimalNumber + " dalam bentuk biner adalah: " + binaryNumber);
// } else {
//   alert("Masukan tidak valid. Harap masukkan angka desimal.");
// }

