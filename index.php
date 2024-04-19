<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>VD1:</h3>
    <p>Văn bản HTML</p>
    <?php
    echo '<p>Văn bản PHP!</p>';
    ?>
    <p>Văn bản HTML khác,</p>
    <h3>VD2:</h3>
    <?php
    echo '<P>Khối dữ liệu PHP 1.</p>';
    ?>
    <p>Dữ liệu HTML, <?php echo 'Dữ liệu PHP 2';?></p>
    <?php
    echo '<b>';
    ?>
    Một ví dụ kết hợp HTML và PHP.
    <?php
    echo '</b>;'
    ?>
    <br>
    <h3>Bài tập1:</h3>
    <?php
     for ($i = 1; $i <= 200; $i++) {
        if ($i % 2 == 0) {
            echo "<span style='color: red; font-weight: bold; font-size:20px;'>{$i}</span>";
        } else {
            echo "<span style='color: blue; font-style: italic;font-size:20px'>{$i}</span>";
        }
        echo " ";
    }

    ?>
        <h3>Bài tập2:</h3>
        <h2>Đăng nhập hệ thống</h2>
        <form action="kq.php" method="GET">
            Tên đăng nhập : <input type="text" name="txtName"/>
            <br>
            Mật khẩu: <input type="password" name="txtPass"/>
            <br>
            <input type="submit" value="Đăng nhập"/>

        </form>
        

</body>

</html>