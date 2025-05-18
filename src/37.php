<?php
// Initialize session
session_start();

// Get data from form submissions
$data = filter_input(INPUT_POST, 'data');
$userId = filter_input(INPUT_POST, 'user_id');

// Your code here

// Output the results
echo "Data received: $data | User ID: $userId";
?>
