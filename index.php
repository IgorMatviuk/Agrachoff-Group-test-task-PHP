<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Введите артикул товара:</h1>
        <input type="text" name="art">
        <input type="submit" name="search_art" value="OK" />
    </form>
    <?php
        require("code.php");
    ?>
</body>
</html>