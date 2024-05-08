<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="login-container">
        <h2>Đăng nhập</h2>
        <!-- Hiển thị thông báo từ PHP -->
        <?php
        session_start();
        if (isset($_SESSION['message'])) {
            echo '<p style="color: red;">'.$_SESSION['message'].'</p>';
            unset($_SESSION['message']); // Xóa thông báo sau khi đã hiển thị
        }
        ?>
        <form action="validateuser.php" method="POST">
            <label for="username">Tài khoản:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="Đăng nhập">
        </form>
    </div>
</body>
</html>
