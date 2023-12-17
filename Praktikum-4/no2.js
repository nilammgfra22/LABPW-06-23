//NO 2
const kata = prompt("Masukkan Kata : ");  //const nd bs ubah (nialinya tetap)
const n = parseInt(prompt("Masukkan angka : ")); 
const hurufAZ = "abcdefghijklmnopqrstuvwxyz";  //alphabetnya

let hasil = ""; //string kosong untuk simpan outpunya

for (let i = 0; i < kata.length; i++) {  
    let karakter = kata[i]; //"karakter" untuk simpan karakter dari kata

    const geserKarakter = (karakter, n) => { //disini untuk simpan karakter dan sebanyak brp mau digeser
        if (/[a-zA-Z]/.test(karakter)) { //"a-zA-z" spy bs hurus besar kecil, "karakter" disitu karakter biar klo huruf yg diinput bs tergeser sesuai n
            const hurufIndeks = hurufAZ.indexOf(karakter.toLowerCase()); //"hurufIndeks" untuk cari indeks karakter dalam string a-z, "karakter.toLowerCase" supaya wlpun dia input huruf besar ttp bs di jalankan, krna dia dikonversi ke huruf kecil terlebih dahulu
            if (hurufIndeks !== -1) { //untuk periksa "hurufIndeks" tdk sama dengan -1, KRNA TDK MUNGKIN DIGESER SEBANYAK -1 TDK ADA APHABETNY
                const geserIndeks = (hurufIndeks + n) % 26; //untuk hitung indeks karakter yg digeser, pke "%26" spy gesernya ada direntang alfabet (0-25)
                const hurufGeser = hurufAZ[(geserIndeks + 26) % 26]; //spy klo dia geser lewat dri alfabet maka kembali lgi ke alfabet awal
                return karakter === karakter.toUpperCase() ? hurufGeser.toUpperCase() : hurufGeser; //return yang mengembalikan karakter geser dengan mempertahankan kasus huruf yang sesuai. klo digesr hufr besar maka returnnya huruf besar jg dn sebaliknya, 
            }
        }
        return karakter;
    };
    const hasil = kata.split('').map(karakter => geserKarakter(karakter, n)).join('');
    alert(hasil);
}