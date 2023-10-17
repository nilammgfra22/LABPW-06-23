//NO 1
let angka = parseInt(prompt('Masukkan angka = ')) //parseInt krna angka dan prompt untuk inputnya
let pangkat = parseInt(prompt('Masukkan pangkat = '))

// let hasil = angka**pangkat;
// alert(`Hasil dari ${angka} pangkat ${pangkat} adalah ${hasil}`)

if (!isNaN(angka) && !isNaN(pangkat)) {
    let hasil = angka ** pangkat;
    if (!isNaN(hasil)) {
      alert(`Hasil dari ${angka} pangkat ${pangkat} adalah ${hasil}`);
    } else {
      alert(`Hasil tidak dapat dihitung.`);
    }
  } else {
    alert(`Inputan bukan angka!`);
  }