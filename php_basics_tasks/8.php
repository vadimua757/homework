<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $name = "Vadim";
        $age = 15;
        echo "Меня зовут: $name <br>";
        echo "Мне $age лет <br>";
            if($age > 18 && $age <= 59) {
                echo "Вам еще работать и работать";
            } elseif ($age > 59) {
                echo "Вам пора на пенсию";
            } elseif ($age <= 17 && $age > 0) {
                echo "Вам еще рано работать";
            } else {
                echo "Неизвестный возраст";
            }
    ?>
</body>
</html>