<?php
    $arr = array(1, 20, 15, 17, 24, 35);
    foreach ($arr as $value) {
        echo $value . "<br>";
    }
    $sum = 0;
    foreach ($arr as $value) {
    $sum += $value;
    }
    echo "Сумма элементов массива равна $sum";
?>

