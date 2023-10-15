// Blackjack

let blackjackGame = {
    'money': 5000, // Uang awal pemain
    'bet': 0, // Jumlah taruhan saat ini
    'you' : {'scoreSpan': '#your-blackjack-result', 'div':'#your-box', 'score':0}, // Ini adalah objek yang mewakili pemain (Anda) dan dealer dalam
    // permainan. scoreSpan (elemen HTML untuk menampilkan skor), div (elemen HTML untuk menampilkan kartu), 
    //dan score (skor pemain atau dealer).
    'dealer' : {'scoreSpan': '#dealer-blackjack-result', 'div':'#dealer-box', 'score':0},
    'cards' : ['2','3','4','5','6','7','8','9','10','J','Q','K','A'], //Ini adalah array yang berisi semua jenis kartu 
    //yang digunakan dalam permainan blackjack.
    'cardsMap' : {'2': 2,'3': 3,'4':4,'5':5,'6':6,'7':7,'8':8,'9':9,'10':10,'J':10,'Q':10,'K':10,'A':[1,11]}, 
    'wins':0, 
    'losses':0,
    'draws':0,
    //wins, losses, dan draws: Ini adalah variabel yang melacak jumlah kemenangan, kekalahan, dan seri dalam permainan.
    'isStand': false, 
    'turnsOver': false, 

}; 

const YOU = blackjackGame['you'];
const DEALER = blackjackGame['dealer'];
//YOU dan DEALER, yang digunakan untuk merujuk pada objek pemain (Anda) dan dealer dalam permainan

document.querySelector('#blackjack-hit-button').addEventListener('click',blackjackHit);  
document.querySelector('#blackjack-deal-button').addEventListener('click',blackjackDeal);   
document.querySelector('#blackjack-stand-button').addEventListener('click',dealerLogic);   
document.querySelector('#place-bet').addEventListener('click', placeBet);
document.querySelector('#reset-money').addEventListener('click', resetMoney);


function resetMoney() {
    blackjackGame['money'] = 5000; // Mengatur uang kembali ke 5000 atau jumlah awal yang Anda tentukan
    document.querySelector('#money').textContent = blackjackGame['money']; // Memperbarui tampilan jumlah uang
}


function placeBet() {
    let betInput = document.querySelector('#bet')
    let betAmount = parseInt(betInput.value)
  

    if (betAmount <= blackjackGame['money']) {
    
        blackjackGame['bet'] = betAmount;
        blackjackGame['money'] -= betAmount;

        betInput.disabled = true;
        //Input field untuk memasukkan taruhan dinonaktifkan, sehingga pemain tidak dapat mengubah jumlah taruhan setelah memasang taruhannya
        document.querySelector('#place-bet').disabled = true;
        // Update the displayed money
        document.querySelector('#money').textContent = blackjackGame['money'];
    } else {
        alert('You do not have enough money for this bet.');
    }

}


function blackjackHit() { //digunakan ketika pemain ingin mengambil kartu tambahan 
    if (blackjackGame['isStand'] === false){ 
        let card = randomCard();
        showCard(card, YOU); 
        updateScore(card, YOU); 
        showScore(YOU); 
    } 
}

function randomCard() { //digunakan untuk menghasilkan kartu acak dari dek kartu.
    return blackjackGame['cards'][Math.floor(Math.random() * 13)]; 
}

function showCard(card, activePlayer) { //menampilkan kartu yg dipilih dalam permainan 
    if (activePlayer['score'] <= 21) {
        let cardImage = document.createElement('img');
        cardImage.src = `static/images/${card}.png`;
        document.querySelector(activePlayer['div']).appendChild(cardImage);
        // hitSound.play();
    }
}

function blackjackDeal() { //memulai kembali permainan setelah satu putaran permainan selesai
    if (blackjackGame['turnsOver'] === true){
        blackjackGame['isStand'] = false;
        
        let yourImages = document.querySelector('#your-box').querySelectorAll('img');
        let dealerImages = document.querySelector('#dealer-box').querySelectorAll('img');
    
        for (i=0; i < yourImages.length; i++) {
            yourImages[i].remove();
        }
        
        for (i=0; i < dealerImages.length; i++) {
            dealerImages[i].remove();
        }
    
        //menyiapkan tampilan dan variabel nya untuk putaran baru setelah putaran seblumnya selesai
        YOU['score'] = 0;
        DEALER['score'] = 0;
    
        document.querySelector('#your-blackjack-result').textContent = 0;
        document.querySelector('#your-blackjack-result').style.color = 'white';
    
        document.querySelector('#dealer-blackjack-result').textContent = 0;
        document.querySelector('#dealer-blackjack-result').style.color = 'white';
        
        document.querySelector('#blackjack-result').textContent = "Let's Play!";
        document.querySelector('#blackjack-result').style.color = 'black';

        blackjackDeal['turnsOver'] = true; 
    }  
}

function updateScore(card, activePlayer) { //memperbaharui skor pemain stelah mengambil kartu baru
    if (card === 'A') {
        if (activePlayer['score'] + blackjackGame['cardsMap'][card][1] <= 21){
            activePlayer['score'] += blackjackGame['cardsMap'][card][1];
        } else {
            activePlayer['score'] += blackjackGame['cardsMap'][card][0];
        }
  
    } else {
        activePlayer['score'] += blackjackGame['cardsMap'][card];
    }
}

function showScore(activePlayer) { //menampilkan skor baru 
    if(activePlayer['score'] > 21) {
        document.querySelector(activePlayer['scoreSpan']).textContent = 'BUST!';
        document.querySelector(activePlayer['scoreSpan']).style.color = 'red';
    } else { 
        document.querySelector(activePlayer['scoreSpan']).textContent = activePlayer['score'];
    }
}

async function dealerLogic() { //mengendalikan sebuah permainan setelah pemain memutuskan utk berhenti 
    blackjackGame['isStand'] = true;

    while (DEALER['score'] < 16 && blackjackGame['isStand'] === true) {
        let card = randomCard();
        showCard(card, DEALER);
        updateScore(card, DEALER);
        showScore(DEALER);
        // await sleep(1000);
    }

    blackjackGame['turnsOver'] = true;
    showResult(computeWinner());
} 
    

function computeWinner() { //menentukan pemenang dari putaran permainan
    let winner;

    if (YOU['score'] <= 21){
        if (YOU['score'] > DEALER['score'] || DEALER['score'] > 21){
            winner = YOU;
        
        } else if (YOU['score'] < DEALER['score']){
            winner = DEALER;
        
        } else if (YOU['score'] === DEALER['score']){
            
        }
    
    } else if (YOU['score'] > 21) {
        if (DEALER['score'] <= 21){
            winner = DEALER;
        
        } else if (DEALER['score'] > 21) {

        }
    }

    return winner;

}

function showResult(winner) {   //menampilkan pesan pemenang dan berakhirnya permainan 
    let message, messageColor;
    if (blackjackGame['turnsOver'] === true) {
        if (winner === YOU) {
            message = `You won Rp.${blackjackGame['bet']}`;
            messageColor = 'green';
            blackjackGame['money'] += blackjackGame['bet'] * 2;
        } else if (winner === DEALER) {
            message = `You lost Rp.${blackjackGame['bet']}`;
            messageColor = 'red';
        }else if (YOU['score'] === DEALER['score']){
            message = 'You drew!';
            messageColor = 'black';
            blackjackGame['money'] += blackjackGame['bet'];
        }else if (blackjackGame['money'] === 0) {
            message = 'Game Over!';
            messageColor = 'red';
        }

        // Enable the bet input field and "Place Bet" button
        document.querySelector('#bet').disabled = false;
        document.querySelector('#place-bet').disabled = false;

        document.querySelector('#money').textContent = blackjackGame['money']; // Update the displayed money

        document.querySelector('#blackjack-result').textContent = message;
        document.querySelector('#blackjack-result').style.color = messageColor;

        blackjackGame['bet'] = 0; // Reset the bet amount
    }
}

