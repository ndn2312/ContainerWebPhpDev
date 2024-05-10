<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang Sách</title>
</head>
<body>
    <h1>Xin chào, <?php echo $_SESSION["username"]; ?></h1>
    <p>Đây là trang sách. Chỉ có người dùng đã đăng nhập mới có thể truy cập vào đây.</p>
    <p><a href="logout.php">Đăng xuất</a></p>
</body>
</html>
