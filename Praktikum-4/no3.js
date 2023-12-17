//NO 3
const str = prompt("Masukkan Text : ") 
const NumArray = str.split('');  //str di ksi jdi array split(spasi) nya itu nddji 

if (NumArray.length == 1) {  //untuk periksa panjang arraynya 1
    alert(`${str} adalah Text palindrome`); //klo iya brrti palindrome
} else {
    const reversedNumArray = NumArray.reverse();  //reversedNumArray itu untuk di tukar/balik
    const reversedstr = reversedNumArray.join(''); //ini untk gabung dan tidak ada pemisah nya trus disimpan varnya di reservestr 

    if (str === reversedstr) { //str === runtuk bandingkan dan tentukan teksnya palindrome atau bukan
        alert(`${str} merupakan kata palindrome`);
    } else {
        alert(`${str} bukan kata palindrome`); 
    }
}