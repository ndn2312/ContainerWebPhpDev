<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pka_s";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$sql = "SELECT SinhVien.MSSV, SinhVien.HoTen, DangKy.Ky, MonHoc.TenMH 
        FROM SinhVien 
        INNER JOIN DangKy ON SinhVien.MSSV = DangKy.MSSV 
        INNER JOIN MonHoc ON DangKy.MaMH = MonHoc.MaMH";
$data = $conn->query($sql);

// Tạo bảng HTML với CSS đẹp
echo '<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    

    th {
        background-color: #008000	; 
        color: yellow;
    }
</style>';
echo '<table>';
echo '<tr>';
echo '<th>MSSV</th>';
echo '<th>Họ Tên</th>';
echo '<th>Kỳ</th>';
echo '<th>Đăng Ký</th>';
echo '</tr>';

while ($row = mysqli_fetch_assoc($data)) {
    echo '<tr>';
    echo '<td>' . $row["MSSV"] . '</td>';
    echo '<td>' . $row["HoTen"] . '</td>';
    echo '<td>' . $row["Ky"] . '</td>';
    echo '<td>' . $row["TenMH"] . '</td>';
    echo '</tr>';
}


echo '</table>';