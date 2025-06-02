<!-- 1日が何秒であるかを求めて画面に計算結果と計算式を出力すること-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 style = "
        color: blue;
        font-size: 30px;
        text-align: center;
        ">
        1日が何秒であるかを求める
  </h3>
    <p>
        <?php
            // 1日 = 24時間
            // 1時間 = 60分
            // 1分 = 60秒  
            $seconds_per_day = 24 * 60 * 60;
            
            print("1日 = 24時間 × 60分 × 60秒 = ");
            print($seconds_per_day  . "秒");
        ?>
</body>
</html>



