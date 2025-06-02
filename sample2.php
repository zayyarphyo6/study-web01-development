<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $num = 50;
        print($num. "は１００より大きいですか？<br>");
        if ($num >= 100) {
            print("はい、$num は１００より大きいです。");
        } else {
            print("いいえ、$num は１００より小さいです。");
        }
    ?>
</body>
</html>