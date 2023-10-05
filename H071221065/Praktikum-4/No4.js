// N0 4 

function sortNumbersWithoutSort(numbers) {
    for (let i = 0; i < numbers.length - 1; i++) {
        for (let j = 0; j < numbers.length - i - 1; j++) {
        
            if (numbers[j] > numbers[j + 1]) {
                let arsip = numbers[j];
                numbers[j] = numbers[j + 1];
                numbers[j + 1] = arsip;
            }
        }  
    }
    return numbers;
}
const n = 5;
const inputNumbers = [50, 20, 1, 45, 3];

const sortedNumbers = sortNumbersWithoutSort(inputNumbers.slice()); 
console.log(`Angka sebelum diurutkan: ${inputNumbers.join(', ')}`);
console.log(`Angka setelah diurutkan: ${sortedNumbers.join(', ')}`);