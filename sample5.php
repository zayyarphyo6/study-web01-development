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
            for ($i = 1; $i <= 100; $i++) {
                if ($i % 2 == 0) {
                    echo "<p>Even number: $i</p>";
                } 
            }
        ?>
    </div>
</body>
</html>