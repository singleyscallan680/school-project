
<?php
// Connect to database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query database for records
$result = mysqli_query($conn, "SELECT * FROM students");

// Output results in JSON format
while ($row = mysqli_fetch_assoc($result)) {
    echo json_encode($row);
}

// Close connection
mysqli_close($conn);
?>