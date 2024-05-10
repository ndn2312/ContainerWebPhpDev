<?php
session_start();

// Kiểm tra xem người dùng đã gửi yêu cầu đăng nhập hay chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thông tin từ form đăng nhập
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kết nối đến cơ sở dữ liệu
    $conn = new mysqli("mysql-thigiuaki-thigiuaki.l.aivencloud.com", "avnadmin", "password", "QUANLYSACH", 16570);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối không thành công: " . $conn->connect_error);
    }

    // Thực hiện truy vấn để kiểm tra đăng nhập
    $sql = "SELECT * FROM User WHERE TenUser='$username' AND MatKhau='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Đăng nhập thành công, thiết lập phiên làm việc và chuyển hướng đến trang Sach.php
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("location: Sach.php");
    } else {
        // Đăng nhập không thành công, chuyển hướng về trang đăng nhập
        header("location: login.php?error=Tên%20người%20dùng%20hoặc%20mật%20khẩu%20không%20chính%20xác.");
    }

    // Đóng kết nối
    $conn->close();
}
?>
