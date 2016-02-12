<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $a = -20;
        var_dump((bool)$a); // bool(true) потому что -20 считается TRUE, как и любое ненулевое (отрицательное или положительное) число!
    ?>
</body>
</html>