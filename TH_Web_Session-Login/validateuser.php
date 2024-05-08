<?php
session_start();

// Kết nối đến CSDL
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "loginth";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
}

// Lấy thông tin đăng nhập từ form
$username = $_POST['username'];
$password = $_POST['password'];

// Thực hiện truy vấn kiểm tra thông tin đăng nhập
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Kiểm tra kết quả truy vấn
if ($result->num_rows > 0) {
    // Đăng nhập thành công
    $_SESSION["IsLogin"] = true;
    header("Location: home.php"); // Chuyển hướng đến trang chính sau khi đăng nhập thành công
} else {
    // Đăng nhập thất bại, lưu thông báo vào session và redirect về trang đăng nhập
    $_SESSION["message"] = "Tài khoản hoặc mật khẩu không đúng. Vui lòng thử lại.";
    header("Location: login.php");
}

$conn->close();
?>
