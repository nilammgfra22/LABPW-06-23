// variabel
let bil = 2
hasil = bil
pangkat = 10
// perulangan
for (i = 1; i<pangkat; i++) {
    hasil *= bil
   
}
// pengkondisian dman sama dngn === itu dpt mmbedakan anatar string/int dan bisa pangkat 0
if (pangkat === 0) {
    hasil = 1
}
console.log(hasil);
