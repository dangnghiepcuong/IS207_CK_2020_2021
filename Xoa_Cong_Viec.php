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

$stmt = $conn->prepare("delete from CT_BD where MaBD = ? and MaCV = ?");
$stmt->bind_param('ss', $_POST['mabd'], $_POST['cv']);
$result = $stmt->execute();
?>