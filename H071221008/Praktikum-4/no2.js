function caesarCipher(text,s) {
// variabel yg mnyimpan hsl 
    let result="";
// utk mengambil kata satu"
    for (let i = 0; i < text.length; i++)
    {
// tmpt mngmbl data dri for/indeks
        let char = text[i];
        let ch = char.charCodeAt();
// pengecekan apbla teks yg kita msukkan hrf kcl smua
        if (char >= "a" && char <= "z") {
// ktk memenuhi kndisi mka akan djlnkn perintah trsb
            ch = ((ch-97 + s)% 26)+ 97;
        } else if (char >= "A" && char <= "Z"){
            ch = ((ch-65 + s)% 26)+ 65;
        }
// mengkoversi hslny ke bntk string
        result += String.fromCharCode(ch);
    }
    return result;
}
console.log(caesarCipher("Indonesia", 13));

