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

$stmt = $conn->prepare("select TenCV, DonGia from CONGVIEC CV, CT_BD CT, BAODUONG BD 
where CT.MaBD = BD.MaBD and CV.MaCV = CT.MaCV and SoXe = ? and NgayNhan = ?");
$stmt->bind_param("ss", $_POST['so'], $_POST['nhan']);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc())
{
  echo '<tr><td>' . $row['TenCV'] . $result->num_rows . '</td><td>' . $row['DonGia'] . '</td>
    <td><button class="del">Xóa</button></td></tr>';
}
?>