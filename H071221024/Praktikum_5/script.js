let botSums = 0;
let mySums = 0;

let cards;

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

window.onload = () => {
  buildCards();
  shuffleCards();
  takeCardButton.setAttribute("disabled", true);
  holdCardsButton.setAttribute("disabled", true);
};

function buildCards() {
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
    "K",
    "Q",
    "J",
  ];
  cards = [];

  for (let i = 0; i < cardTypes.length; i++) {
    for (let j = 0; j < cardValues.length; j++) {
      cards.push(cardValues[j] + "-" + cardTypes[i]);
    }
  }
}

function shuffleCards() {
  for (let i = 0; i < cards.length; i++) {
    let randomNum = Math.floor(Math.random() * cards.length);
    let temp = cards[i];
    cards[i] = cards[randomNum];
    cards[randomNum] = temp;
  }
}

startGameButton.addEventListener("click", function () {
  if (startGameButton.textContent == "Play Again") {
    botSums = 0;
    mySums = 0;

    const allCardsImage = document.querySelectorAll("img");
    for (let i = 0; i < allCardsImage.length; i++) {
      allCardsImage[i].remove();
    }
    cards = [];
    buildCards();
    shuffleCards();
  }

  if (inputMoney.value > 0 && inputMoney.value <= parseInt(myMoney.textContent)){
    botSumsElement.textContent = "";
    resultElement.textContent = "";
    takeCardButton.disabled = false;
    holdCardsButton.disabled = false;
    startGameButton.textContent = "Play Again";
    startGameButton.setAttribute("disabled", true);

    for (let i = 0; i < 2; i++) {
      let cardImg = document.createElement("img");
      let card = cards.pop();
      cardImg.src = `/images/cards/${card}.png`;
      mySums += getValueOfCard(card);
      mySumsElement.textContent = mySums;
      myCardsElement.append(cardImg);
    }
    if (mySums > 21) {
      takeCardButton.disabled = true;
      holdCardsButton.disabled = true;
      startGameButton.disabled = false;
      resultElement.textContent = "You Lose";
      myMoney.textContent = parseInt(myMoney.textContent) - inputMoney.value;
    }
  } else if (inputMoney.value < 0){
    resultElement.textContent = "Your money must be > 0"
  } else {
    resultElement.textContent = "Your money is not enough"
  }
});

takeCardButton.addEventListener("click", function () {

  let cardImg = document.createElement("img");
  let card = cards.pop();
  cardImg.src = `/images/cards/${card}.png`;
  mySums += getValueOfCard(card);
  mySumsElement.textContent = mySums;
  myCardsElement.append(cardImg);


  if (mySums > 21) {
    takeCardButton.disabled = true;
    holdCardsButton.disabled = true;
    startGameButton.disabled = false;
    resultElement.textContent = "You Lose";
    myMoney.textContent = parseInt(myMoney.textContent) - inputMoney.value;
  }
});

holdCardsButton.addEventListener("click", function () {

  const addBotCards = () => {
    setTimeout(() => {
      let cardImg = document.createElement("img");
      let card = cards.pop();
      cardImg.src = `/images/cards/${card}.png`;
      botSums += getValueOfCard(card);
      botCardsElement.append(cardImg);
      botSumsElement.textContent = botSums;

      if (botSums < 18) {
        addBotCards();
      } else {

        let message = "";
        if (mySums > 21 || mySums % 21 < botSums % 21) {
          message = "You Lose";
          myMoney.textContent = parseInt(myMoney.textContent) - inputMoney.value;
        } else if (botSums > 21 || mySums % 21 > botSums % 21) {
          message = "You Win";
          let money = parseInt(myMoney.textContent)
          money += inputMoney.value * 2;
          myMoney.textContent = money
        } else if (mySums === botSums) message = "Draw";

        resultElement.textContent = message;
        startGameButton.disabled = false;
        takeCardButton.disabled = true;
        holdCardsButton.disabled = true;
      }
    }, 1000);
  };

  addBotCards();
});

function getValueOfCard(card) {
  let cardDetail = card.split("-");
  let value = cardDetail[0];

  if (isNaN(value)) {
    // Kartu AS
    if (value == "A") return 11;
    // Kartu K, Q, J
    else return 10;
  }
  return parseInt(value);
}
