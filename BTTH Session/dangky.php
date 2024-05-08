<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Trang đăng ký thành viên</title>
</head>

<body>
    <h1>Trang đăng ký thành viên</h1>
    <form action="xuly.php" method="POST">
        <table>
            <tr>
                <td colspan="2">Form đăng ký</td>
            </tr>
            <tr>
                <td>Tên đăng nhập:</td>
                <td><input type="text" id="username" name="username"></td>
            </tr>
            <tr>
                <td>Mật khẩu:</td>
                <td><input type="password" id="pass" name="pass"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" id="email" name="email"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Đăng ký"></td>
            </tr>
        </table>
    </form>
</body>

</html>