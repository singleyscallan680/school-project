<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM your_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><thead><tr><th>ID</th><th>Column Name 1</th><th>Column Name 2</td></tr></thead><tbody>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["column_name_1"] . "</td><td>" . $row["column_name_2"] . "</td></tr>";
  }
  echo "</tbody></table>";
} else {
  echo "No records found.";
}

$conn->close();
