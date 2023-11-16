function exponential(base, exponent) {
    if (exponent === 0) {
        return 1;
    } 

    let result = 1;
    for (let i = 0; i < exponent; i++) {
        result *= base;
    }
    return result;
}
console.log(exponential(2,10));
console.log(exponential(3,4));