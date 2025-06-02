<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $week = ['日', '月', '火', '水', '木', '金', '土'];
        $today = date('w'); // 0 (日曜日) から 6 (土曜日) の数値を取得
        print("今日は" . $week[$today] . "曜日です。<br>");
        if ($today == 0 || $today == 6) {
            print("今日は週末です。");
        } else {
            print("今日は平日です。");
        }
    ?>
</body>
</html>