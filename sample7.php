<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php   
        $arrys = [
            "apple" => "りんご",
            "banana" => "バナナ",
            "orange" => "オレンジ",
            "grape" => "ぶどう",
        ];

        foreach ($arrys as $key => $value) {
            print ($key . "は" . "英語です。<br>");
            print ($value . "は" . "日本語です。<br>");
        }
        ?>
    </div>
</body>
</html>