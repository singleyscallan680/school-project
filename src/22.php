<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Example query to select all records from the table
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"] . " - Name: " . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
