function bubbleSort(arr) {
    var n = arr.length;
    var swapped;

    do {
        swapped = false;

        for (var i = 0; i < n - 1; i++) {
          if (arr[i] > arr[i + 1]) {
            // tukar elemen jika mereka tdk dlm urutan yg bnr
            // nilai sementara
            var temp = arr[i];
            // elemen diperbaharui
            arr[i] = arr[i + 1];  
            // diperbaharui dngn nilai yg disimpan di temp
            arr[i + 1] = temp;
            swapped = true;       
          }
        }
    // perulangan brkhr jika tdk ada pertukaran yg di lakukan pd iterasi ini
    } while (swapped);
    return arr;
  }
var n = 5;
var array = [50, 20, 1, 45, 3];

bubbleSort(array);
console.log(array);
// mnyimpn pnjng kata
// ini menandai adanya pergeseran
// if= pengkondisian apakah indeks 0 lbh bsr dri indeks 1
// var= kl lbh bsr maka akan disimpan ke variabel temp
// arr= akan di tempa(double)oleh indeks ke 1 dan bgitu pula sblikny
// swapped= jika memenuhi kondisi maka akan di jlnkan
// while= akan trs dijlnkn smpai data hbs