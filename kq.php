<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   
        <?php
        $sName = $_REQUEST["txtName"];
        $sPass = $_REQUEST["txtPass"];

        ?>
        <h2>Kết quả đăng nhập</h2>
        Tên đăng nhập là: <?php echo $sName; ?>
        <br/>
        Mật khẩu là: <?php echo $sPass ?>

</body>

</html>