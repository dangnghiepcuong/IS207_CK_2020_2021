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

$stmt = $conn->prepare("insert into BAODUONG(MaBD, NgayNhan, SoKM, NoiDung, SoXe) values(?, ?, ?, ?, ?)");
$stmt->bind_param("ssiss", $_POST['mabd'], date("Y-m-d"), $_POST['km'], $_POST['nd'], $_POST['so']);
$stmt->execute();
?>