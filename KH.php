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

$stmt = $conn->prepare("select HoTenKH, KH.MaKH from KHACHHANG KH, XE where KH.MaKH = XE.MaKH and SoXe=?");
$stmt->bind_param('s', $_POST['so']);
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc())
{
    echo json_encode(array("ten" => $row['HoTenKH'], "ma" => $row['MaKH']));
}
?>