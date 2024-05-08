<?php
// Kết nối tới cơ sở dữ liệu (sử dụng MySQLi hoặc PDO để bảo mật hơn)
$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Không thể kết nối tới cơ sở dữ liệu: " . mysqli_connect_error());
}

if (isset($_POST['register'])) {
    // Lấy thông tin từ form đăng ký
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];



    // Kiểm tra tính hợp lệ của dữ liệu (ví dụ: kiểm tra tên đăng nhập đã tồn tại chưa)

    // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Thêm thông tin người dùng vào bảng "member"
    $sql = "INSERT INTO member (username, password, email)
            VALUES ('$username', '$hashedPassword')";

    if (mysqli_query($conn, $sql)) {
        echo "Đăng ký thành công!";
    } else {
        echo "Đăng ký thất bại: " . mysqli_error($conn);
    }
}

mysqli_close($conn);