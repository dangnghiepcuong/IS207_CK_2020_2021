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

// echo $_POST['ma'] . $_POST['ten'] . $_POST['dc'] . $_POST['dt'];

$stmt = $conn->prepare("insert into KHACHHANG values(?, ?, ?, ?)");
$stmt->bind_param('ssss', $_POST['ma'], $_POST['ten'], $_POST['dc'], $_POST['dt']);
$stmt->execute();

$conn->close();
?>