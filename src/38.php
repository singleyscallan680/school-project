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

$sql = "SELECT * FROM students WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$id = 1; // Change the value as needed
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  echo "Found student with ID: " . $result->fetch_assoc()["id"] . "<br>";
} else {
  echo "No student found.";
}

$conn->close();
?>
