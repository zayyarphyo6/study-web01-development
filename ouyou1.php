<!DOCTYPE html>
<html>
<head>
    <style>
        .date {
            display: inline-block;
            font-size: 11px;
            margin: 1px;
        }
    </style>
</head>
<body>
    <?php
        $today = new DateTime();
        $oneYearLater = clone $today;
        $oneYearLater->modify('+1 year');
        while ($today <= $oneYearLater) {
            echo  "<span class = 'date'>" . $today->format('n/j(D)') . "</span>";
            $today->modify('+1 day');
        }

    ?>
</body>
</html>