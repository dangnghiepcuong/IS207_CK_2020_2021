<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="Them_Xe.js"></script>
    <title>Document</title>
</head>

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
?>

<body>
    <h3>Thêm thông tin xe khách hàng</h3>
    <form action="Them_Xe.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="ten">Họ tên khách hàng</label>
                </td>
                <td>
                    <select name="ma" id="ma">
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['MaKH'] . '">' . $row['HoTenKH'] . '</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="so">Số xe</label>
                </td>
                <td>
                    <input name="so" type="text" placeholder="51H-XXX.XX">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="hang">Hãng Xe</label>
                </td>
                <td>
                    <select name="hang" id="hang" multiple="3">
                        <option value="Toyota">Toyota</option>
                        <option value="BMW">BMW</option>
                        <option value="Audi">Audi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nam">Năm sản xuất</label>
                </td>
                <td>
                    <input name="nam" type="number" placeholder="2020">
                </td>
            </tr>
        </table>
        <input type="submit" id="btn-them-xe">
    </form>
</body>

</html>