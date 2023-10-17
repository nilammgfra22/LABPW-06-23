let botSums = 0; //variabel yg mewakili jumlah poin bot, defaultnya 0 supaya bs di pkekan rumus dibawa
let mySums = 0;

let botASCards = 0;
let myASCards = 0;

let cards; //tdk = 0 krna nnti jadi array
let isCanHit = true; //isCanHit u/kartu

const startGameButton = document.getElementById("btn-start-game");
const takeCardButton = document.getElementById("btn-take");
const holdCardsButton = document.getElementById("btn-hold");

const mySumsElement = document.getElementsByClassName("my-sums")[0];
const myCardsElement = document.getElementsByClassName("my-cards")[0];
const myMoney = document.getElementById("my-money");
const inputMoney = document.getElementsByTagName("input")[0];

const botSumsElement = document.getElementsByClassName("bot-sums")[0];
const botCardsElement = document.getElementsByClassName("bot-cards")[0];

const resultElement = document.getElementById("result"); 

//untuk panggil function riderectToGamePgae dari play ke script biar klo dipencet play game pinda scene
function redirectToGamePage() { 
  window.location.href = "index.html";
}

//setelah play game masuk ke scene/window 2
window.onload = function () {
  buildUserCards();  //tumpukan kartu
  shuffleCards();  //untuk mengacak kartu
  takeCardButton.setAttribute("disabled", true); //tombol take a card di nonaktifkan pada saat masuk ke page utama
  holdCardsButton.setAttribute("disabled", true); //disable true biar nda bs dipencet, harus pencet dulu start game
};

//BUILD USER CARDS 
function buildUserCards() { 
  let cardTypes = ["H", "B", "S", "K"];
  let cardValues = [
    "A",
    "2",
    "3",
    "4",
    "5",
    "6",
    "7",
    "8",
    "9",
    "10",
    "J",
    "Q",
    "K",
  ];
  cards = []; //disini disimpan kumpulan kartunya

  //disini digabung jenis kartu dan nilai kartu (ex: 10 SKOP) jadi satu kartu
  for (let i = 0; i < cardTypes.length; i++) { //for i u looping jenis kartu
    for (let j = 0; j < cardValues.length; j++) { //loop u nilai kartu dan digunakan untuk mengakses indeks dari nilai kartu dalam array cardValues.
      cards.push(cardValues[j] + "-" + cardTypes[i]);
    }
  }
}

//shuffle untuk acak kartu
function shuffleCards() { 
  for (let i = 0; i < cards.length; i++) {
    let randomNum = Math.floor(Math.random() * cards.length);  //angka acak dikali dengan panjang kartu kemudian nnti dibulatkan pakai math floor
    let temp = cards[i]; //smtra sblm ditukar 
    cards[i] = cards[randomNum]; //Nilai kartu di indeks ke-i digantikan dengan nilai kartu yang terpilih secara acak 
    cards[randomNum] = temp; //krtu yg suda di acak kmudian brubah mnjdi krtu yg i
  }
}

//BUTTON START GAME
startGameButton.addEventListener("click", function () { //supaya bs dijalankan butonnya
  if (isNaN(parseInt(inputMoney.value))) { //"25" -> 25 "arni"->nan
    alert("HARAP MASUKKAN SALDO")
    return
  }
  else if ((inputMoney.value)==0) {
    alert("SALDO TIDAK BOLEH 0")
    return
  }
  else if ((inputMoney.value) > 5000){
    alert("MAKSIMAL PENGISIAN SALDO HANYA 5000")
    return
  }

  if (startGameButton.textContent === "TRY AGAIN") {  //kalau se klik ini bro tagganti start jd try
    botSums = 0; //wattunami dipke broo yg diatas
    mySums = 0;
    botASCards = 0;
    myASCards = 0;
    isCanHit = true;


    botSumsElement.textContent = ''; //menang kalah ttp muncul jumlah kartu bot

    //script untuk mulai dari awal gamenya setalah dipencet try again
    const allCardsImage = document.querySelectorAll("img"); //
    for (let i = 0; i < allCardsImage.length; i++) {
      allCardsImage[i].remove();
    }

    //script untuk kartu tertutup setelah dimulai ulang gamenya
    let cardImg = document.createElement("img");  
    cardImg.src = "/images/cards/kartutertutup.png";
    cardImg.className = "hidden-card";
    botCardsElement.append(cardImg); //menampilkan gambar kartu tertutup 

    resultElement.textContent = " "; //string kosong spy klo kembali ke awal setlah game hasilnya akan hilang dan mulai baru game
    buildUserCards(); 
    shuffleCards();
  }

  takeCardButton.disabled = false; //spya nyala lgi take card button
  holdCardsButton.disabled = false;
  startGameButton.textContent = "TRY AGAIN"; //mengganti teks pada tombol "startGameButton" menjadi "TRY AGAIN".
  botSums = 0; //spy nda bs diliat kartunya bot
  startGameButton.setAttribute("disabled", true); //spy nda bs dipencet try again kecuali selesai game

  for (let i = 0; i < 2; i++) { //kenapa 2?spy kartu yang myuncul cuma 2
    let cardImg = document.createElement("img"); //spy ada gambar kartunya
    let card = cards.pop(); //untuk batasnya 2 kartu//mengasumsikan bahwa setiap pemain mendapatkan dua kartu di awal permainan.cards akan mengambil dan menghapus elemen trkhir dan hasilnya akan terdapat 2 kartu yang nantiny disimpan var card 
    cardImg.src = `/images/cards/${card}.png`; //untuk tampilkan gambur kartu
    mySums += getValueOfCard(card); //untuk hitung jumlah kartu
    myASCards += checkASCard(card); //untuk cek kartu as
    mySumsElement.textContent = mySums; //spya muncul tulisan hasil winner or lose
    myCardsElement.append(cardImg); //u tmbh gambar kartunya
  } 
});

takeCardButton.addEventListener("click", function () { //kondisi untuk ambil kartu lagi
  if (!isCanHit) return; 

  let cardImg = document.createElement("img"); 
  let card = cards.pop(); 
  cardImg.src = `/images/cards/${card}.png`;
  mySums += getValueOfCard(card); 
  myASCards += checkASCard(card);
  mySumsElement.textContent = mySums;
  myCardsElement.append(cardImg);

  if (reduceASCardValue(mySums, myASCards) > 21) isCanHit = false; //kalau jumlah kartu besar dari 21 nd bsa mki tambah kartu

  //kalau misal lebihmi 21 kartu non aktifmi take hold trus nyala start game autton trus muncul nice try baru duit kurangmi
  if (mySums > 21) { 
    takeCardButton.disabled = true; 
    holdCardsButton.disabled = true;
    startGameButton.disabled = false; 
    resultElement.textContent = "NICE TRY"; 
    myMoney.textContent -= inputMoney.value; //untuk kurang saldo pasang dengan jumlah saldo seluruh
  }
});

//
holdCardsButton.addEventListener("click", function () {
  setTimeout(function () {
    document.getElementsByClassName("hidden-card")[0].remove();
  } ,1000); //jeda terbuka kartu bot apabila di hold

  function addBotCards() {
    setTimeout(function () { 
      let cardImg = document.createElement("img"); 
      let card = cards.pop();
      cardImg.src = `/images/cards/${card}.png`; 
      botSums += getValueOfCard(card);
      botASCards += checkASCard(card); 
      botCardsElement.append(cardImg); 
      botSumsElement.textContent = botSums; 

      //as nya
      if (botSums < 21) { 
        addBotCards();
      } else { 
        botSums = reduceASCardValue(botSums, botASCards); 
        mySums = reduceASCardValue(mySums, myASCards);
        isCanHit = false; //klo lebih 21 nda bs tambah makanya false

        let message = "";
        if (mySums > 21 || mySums % 22 < botSums % 22) {  
          message = "NICE TRY";
          myMoney.textContent -= inputMoney.value;
        } else if (botSums  < 21 || mySums % 22 > botSums % 22) {
          message = "WINNER BRO"; // 
          myMoney.textContent = parseInt(myMoney.textContent) + inputMoney.value * 5 ;
        } else if (mySums === botSums) message = "SERI";

        resultElement.textContent = message;
        startGameButton.disabled = false;
        takeCardButton.disabled = true;
        holdCardsButton.disabled = true;
      }
    }, 1000);
  }

  addBotCards();
});

//nilai kartu beserta rumus
function getValueOfCard(card) {
  let cardDetail = card.split("-"); //membagi string card menjadi dua bagian dengan memisahkan string berdasarkan tanda "-" menggunakan split("-"). Hasilnya adalah array cardDetail, di mana elemen pertama adalah nilai kartu (seperti "A" atau "7") dan elemen kedua adalah jenis kartu (seperti "Hearts" atau "Diamonds").
  let value = cardDetail[0]; //mengambil nilai kartu (elemen pertama dari array) dan menyimpannya dalam variabel value.

  //untuk as yg dua kondisinya 
  if (isNaN(value)) {
        if (value == "A") {
            if (mySums >= 11 || botSums >= 11) { //"||" atau
                return 1
            } else if (mySums < 11 || botSums < 11) {
                return 11;
            }
        }
        return 10; //j q k
    }
  return parseInt(value); //parse int krna valuenya numerikmi
}

function checkASCard(card) {
  if (card[0] == "A") return 1;
  else return 0;
}

//untuk cek as card function diatasnya passss
function reduceASCardValue(sums, asCards) {
  while (sums > 21 && asCards > 0) {
    sums -= 10;
    asCards -= 1;
  }
  return sums;
}