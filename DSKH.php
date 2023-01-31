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

$stmt = $conn->prepare("select * from KHACHHANG");
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0)
    while($row = $result->fetch_assoc())
    {
        echo '<option value="'. $row['MaKH'] .'">'. $row['HoTenKH'] .'</option>';
    }
else {
    echo ("0");
}
?>