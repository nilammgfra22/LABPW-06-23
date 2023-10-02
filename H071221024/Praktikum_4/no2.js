function chiperTextEncrypt(str, n) {
    function geser(char, n) {
        let code = char.charCodeAt(0); //kode ascii
        //kode standar yang digunakan untuk merepresentasikan karakter-karakter seperti huruf, angka, dan simbol lainnya
        
        if ((code >= 65 && code <= 90)) {
            // Untuk huruf kapital
            return String.fromCharCode((code - 65 + n) % 26 + 65);
        } else if ((code >= 97 && code <= 122)) {
            // Untuk huruf kecil
            return String.fromCharCode((code - 97 + n) % 26 + 97);
        }
        return char;
    }

    let result = "";
    for (let i = 0; i < str.length; i++) {
        result += geser(str[i], n);
    }
    return result;
}

console.log(chiperTextEncrypt("abc", 1));
console.log(chiperTextEncrypt("Indonesia", 13));
