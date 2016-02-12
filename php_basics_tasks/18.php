<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $a = (string) '78';
        $b = (integer) 78;
        if ($a == $b)
            echo "Равны";
        else
            echo "Не равны";
    ?>
</body>
</html>