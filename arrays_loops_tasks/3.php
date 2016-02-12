<?php
    $arr = array(26, 17, 136, 12, 79, 15);
    foreach ($arr as $value) {
        echo $value . "<br>";
    }
    $sum = 0;
    foreach ($arr as $value) {
    $sum2 = $value * $value;
    $sum += $value;
    }
    echo "Сумма квадратов элементов массива равна $sum2";
?>

