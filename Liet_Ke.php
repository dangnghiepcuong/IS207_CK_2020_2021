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

$stmt = $conn->prepare("select HoTenKH, XE.SoXe, COUNT(MaBD) as C from KHACHHANG KH, XE, BAODUONG BD 
                        where KH.MaKH = XE.MaKH and XE.SoXe = BD.SoXe
                        group by HoTenKH, XE.SoXe, MaBD 
                        having C > ?");
$stmt->bind_param('i', $_POST['lan']);
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc())
{
    echo '<tr><td>' . $row['HoTenKH'] . '</td><td>' . $row['SoXe'] . '</td><td>' . $row['C'] . '</td></tr>';
}
?>