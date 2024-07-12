<?php
function isPalindrome($str) {
    $cleanedStr = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str));
    return $cleanedStr === strrev($cleanedStr);
}

echo isPalindrome('SAIPPUAKIVIKAUPPIAS') ? 'true' : 'false'; 
echo "\n";
echo isPalindrome('Aibohphobia') ? 'true' : 'false'; 
echo "\n";
echo isPalindrome('Anna') ? 'true' : 'false'; 
echo "\n";
echo isPalindrome('Civic') ? 'true' : 'false'; 
echo "\n";
echo isPalindrome('My gym') ? 'true' : 'false'; 
echo "\n";
echo isPalindrome('No lemon, no melon') ? 'true' : 'false'; 
echo "\n";

function checkPalindrome() {
    echo "Masukkan sebuah string: ";
    $handle = fopen("php://stdin", "r");
    $input = trim(fgets($handle));
    
    if (isPalindrome($input)) {
        echo "true\n";
    } else {
        echo "false\n";
    }
    fclose($handle);
}

checkPalindrome();

?>
