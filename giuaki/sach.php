<?php
// Thực hiện kết nối đến cơ sở dữ liệu
$conn = new mysqli("mysql-thigiuaki-thigiuaki.l.aivencloud.com", "avnadmin", "password", "QUANLYSACH", 16570);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Thực hiện truy vấn để lấy 5 bản ghi sách đầu tiên từ cơ sở dữ liệu
$sql = "SELECT * FROM Sach LIMIT 5";
$result = $conn->query($sql);

// Kiểm tra và hiển thị dữ liệu
if ($result->num_rows > 0) {
    // Bắt đầu bảng HTML
    echo "<table border='1'>";
    echo "<tr><th>MaSach</th><th>TenSach</th><th>SoLuong</th></tr>";

    // Hiển thị từng hàng dữ liệu
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["MaSach"]."</td>";
        echo "<td>".$row["TenSach"]."</td>";
        echo "<td>".$row["SoLuong"]."</td>";
        echo "</tr>";
    }

    // Kết thúc bảng HTML
    echo "</table>";
} else {
    echo "Không có dữ liệu";
}

// Đóng kết nối
$conn->close();
?>
