<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "送信した値 : " .$_POST['name']
    ?>
    <form action="" method="post">
        Name:<input type="text" name="name">
        <input type="submit" value="submit">
    </form>
</body>
</html>