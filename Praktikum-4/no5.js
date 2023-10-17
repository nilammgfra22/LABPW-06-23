//NO 5
let angka = parseInt(prompt("Masukkan Angka : "))
let binary = ""//u simpan gmbrn biner dari angka yg diinput

while (true){ //bakal jalan klo dalam kurung kurawal true
    binary = String(angka % 2) + binary //sisa bagi 2 trus dikonversi jadi string lalu digabung ke awal string binary
    angka = Math.floor(angka / 2)
    if (angka === 0) {
        break
    } 
}
alert(binary)