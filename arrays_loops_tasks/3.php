<?php
    $arr = array(26, 17, 136, 12, 79, 15);
    foreach ($arr as $value) {
        echo $value . "<br>";
    }
    $result = 0;
    foreach ($arr as $value) {
        $result += pow($value,2);
    }
    echo "Сумма квадратов элементов массива равна $result";