<?php
// Thông tin kết nối cơ sở dữ liệu
$host = 'mysql-thigiuaki-thigiuaki.l.aivencloud.com';
$port = 16570;
$username = 'avnadmin';
$password = 'AVNS_w0OS6W7fC6GtSri30vy'; // Thay 'password' bằng mật khẩu thực tế của bạn
$database = 'QUANLYSACH';

// Tạo kết nối đến cơ sở dữ liệu
$conn = new mysqli($host, $username, $password, $database, $port);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Thực hiện truy vấn
$sql = "SELECT * FROM Sach";
$result = $conn->query($sql);

// Xử lý kết quả
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "MaSach: " . $row["MaSach"]. " - TenSach: " . $row["TenSach"]. " - SoLuong: " . $row["SoLuong"]. "<br>";
    }
} else {
    echo "Không có dữ liệu";
}

// Đóng kết nối
$conn->close();
?>
