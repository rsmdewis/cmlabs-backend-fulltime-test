const readline = require('readline');

function isPalindrome(str) {
    let cleanedStr = str.replace(/[^A-Za-z0-9]/g, '').toLowerCase();
    return cleanedStr === cleanedStr.split('').reverse().join('');
}
console.log(isPalindrome('SAIPPUAKIVIKAUPPIAS')); 
console.log(isPalindrome('Aibohphobia')); 
console.log(isPalindrome('Anna')); 
console.log(isPalindrome('Civic')); 
console.log(isPalindrome('My gym')); 
console.log(isPalindrome('No lemon, no melon')); 
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

rl.question('Masukkan sebuah string: ', (input) => {
    if (isPalindrome(input)) {
        console.log('true');
    } else {
        console.log('false');
    }
    rl.close();
});
