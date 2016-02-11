<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $a = 3;
        $b = 8;
        $operator = '*';
        switch ($operator) {
            case "+";
                echo $a + $b;
                break;
            case "-";
                echo $a - $b;
                break;
            case "*";
                echo $a * $b;
                break;
            case "/";
                echo $a / $b;
                break;
        }
    ?>
</body>
</html>