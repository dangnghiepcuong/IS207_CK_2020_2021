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

$stmt = $conn->prepare("update BAODUONG set ThanhTien = ?, NgayTra = ? where SoXe = ? and NgayNhan = ?");
$stmt->bind_param("sss", $_POST['tien'], date("Y-m-d"), $_POST['so'], $_POST['nhan']);

$stmt->execute();
?>