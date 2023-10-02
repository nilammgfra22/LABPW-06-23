function isPalindrome(str) {
    let cleanedStr = str.toLowerCase();

    let len = cleanedStr.length;
    for (let i = 0; i < len / 2; i++) {
        if (cleanedStr[i] !== cleanedStr[len - 1 - i]) {
            return false;
        }
    }
    return true;
}

console.log(isPalindrome("131"));
console.log(isPalindrome("Kodok")); 
console.log(isPalindrome("apa"));
console.log(isPalindrome("kasur ini rusak"));
console.log(isPalindrome("malam"));
console.log(isPalindrome("makan"));
console.log(isPalindrome("anak"));
