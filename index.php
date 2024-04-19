<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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

</body>

</html>