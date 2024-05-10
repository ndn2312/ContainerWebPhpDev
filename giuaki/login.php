<?php
session_start();

// Kiểm tra xem người dùng đã gửi yêu cầu đăng nhập hay chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kết nối đến cơ sở dữ liệu và kiểm tra đăng nhập
    // Giả sử bạn đã có hàm để kiểm tra đăng nhập từ cơ sở dữ liệu
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Code kiểm tra đăng nhập
    if (kiem_tra_dang_nhap($username, $password)) {
        // Đăng nhập thành công, thiết lập phiên làm việc
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("location: Sach.php");
    } else {
        // Đăng nhập không thành công, hiển thị thông báo lỗi
        $error = "Tên người dùng hoặc mật khẩu không chính xác.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <label for="username">Tên người dùng:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Đăng nhập</button>
        </div>
    </form>
    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
</body>
</html>
