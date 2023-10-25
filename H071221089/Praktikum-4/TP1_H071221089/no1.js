// No1
let angka = parseInt(prompt("Angka : "));
let pangkat = parseInt(prompt("Pangkat : "));

function perpangkatan(angka, pangkat) {
  return angka ** pangkat;
}

let hasil = perpangkatan(angka, pangkat);
alert(`${angka} ^ ${pangkat} = ${hasil}`);
