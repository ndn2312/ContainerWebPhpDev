<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION["IsLogin"]) || !$_SESSION["IsLogin"]) {
    // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
    header("Location: login.html");
    exit;
}

// Kiểm tra xem người dùng có thực hiện hành động logout không
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["logout"])) {
    // Nếu người dùng thực hiện logout, xóa tất cả các biến session và chuyển hướng về trang đăng nhập
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chính</title>
</head>
<body>
    <div class="welcome-container">
        <h2>Xin chào, Người dùng!</h2>
        <p>Bạn đã đăng nhập thành công!</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input type="submit" name="logout" value="Đăng xuất">
        </form>
    </div>
</body>
</html>
