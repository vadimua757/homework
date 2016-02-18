<?php
    $arr = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
        foreach($arr as $key => $week) {
            $key++;
            if ($key < 6) {
                echo $week . ', ';
            }
            if ($key >= 6) {
                echo "<b>$week</b>, ";
            }
        }