let kata = prompt("Masukkan kata: ");
let geser = parseInt(prompt("Geser: "));
let new_kata = "";

for (let i = 0; i < kata.length; i++) {
  let char = kata[i];

  if (char === " ") {
    new_kata += " ";
  } else {
    let charCode = kata.charCodeAt(i);
    let isUpperCase = char === char.toUpperCase();

    if (isUpperCase) {
      charCode = ((charCode - 65 + geser) % 26) + 65;
    } else {
      charCode = ((charCode - 97 + geser) % 26) + 97;
    }

    new_kata += String.fromCharCode(charCode);
  }
}

alert(new_kata);
