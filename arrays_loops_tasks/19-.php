<?php
$arr = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
    foreach($arr as $key => $week) {
        $day = [4];
        $key++;
        if ($key !== $day) {
            echo $week . ', ';
        }
        if ($key = $day) {
            echo "<i>$week</i>, ";
        }
    }