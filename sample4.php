<!DOCTYPE html>
<html>
<head>
    <title>1から365までの数字</title>
    <style>
        .number {
            display: inline-block;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>1から365までの数字</h1>
    <?php
    for ($i = 1; $i <= 365; $i++) {
        echo "<span class='number'>" . $i . "</span>";
    }
    ?>
</body>
</html>