<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CK_2020_2021";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("insert into XE values(?, ?, ?, ?)");
$stmt->bind_param('ssss', $_POST['so'], $_POST['hang'], $_POST['nam'], $_POST['ma']);
$stmt->execute();
?>