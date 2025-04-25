<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_project";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检查连接
if ($conn->connect_error) {
  die("连接失败: " . $conn->connect_error);
}
// 执行sql查询，返回结果
$result = $conn->query("SELECT * FROM students");
echo "<table><tr><th>ID</th><th>Name</th><th>Age</th></tr>";
while($row = $result->fetch_assoc()) {
  echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["age"] . "</td></tr>";
}
$conn->close();
?>
