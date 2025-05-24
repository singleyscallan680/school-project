<?php
// Connect to the database
$dbh = new PDO('mysql:host=localhost;dbname=mydatabase', 'username', 'password');

// Query to find students by name
$stmt = $dbh->prepare("SELECT * FROM students WHERE name LIKE ?");
$result = $stmt->execute(['%student%' . ' %']);

// Fetch all rows from the query
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    // Output each row's data separated by a coma
    echo $row['name'] . ',' . $row['age'] . ',' . $row['gender'] . ",". PHP_EOL;
}

// Close the database connection
$dbh = null;
?>
