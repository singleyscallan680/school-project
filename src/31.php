<?php
// Initialize PHP errors and output buffering
error_reporting(E_ALL);
ini_set('output_buffering', 1);

// Function to check if a string is a palindrome
function isPalindrome($str) {
    $left = 0;
    $right = strlen($str) - 1;

    while ($left < $right) {
        if ($str[$left] !== $str[$right]) {
            return false;
        }
        $left++;
        $right--;
    }

    return true;
}

// Example usage of isPalindrome function
$testString = "A man a plan a canal Panama";
if (isPalindrome($testString)) {
    echo "The string is a palindrome.";
} else {
    echo "The string is not a palindrome.";
}
