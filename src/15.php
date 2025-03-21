<?php
// Define variables and initialize array
$x = 0;
$y = '';

// Initialize $z to false
$z = false;

// If condition
if ($x < 10) {
    // Add an element into the array, increment x by 1
    $x += 1;

    // Update $y with the current value of $x and add 1 to it
    $y = $x + 1;

    // If condition for z
    if ($z) {
        // Print y
        echo "Element added: " . $y;
    }
} else {
    // Output message when x is out of range (i.e. less than 10)
    echo "Invalid value for x.";
}
?>
