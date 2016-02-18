<?php
//for($i=0,$j=0,$k="Точки"; $i<10; $j++,$i+=$j) { $k=$k."."; echo $k; }
//str_repeat('&nbsp', 5);
    $str = '';
    $data = '';
    $max = 48;
    for($i=$max; $i>=0;$i--) {
        if ($i%2 == 0 || $i == 0) {
            $str[] = str_repeat('&nbsp;', $i / 2) . $data . '*';
        } else {
            $data .= '*';
        }
    }
        echo implode('<br>', $str)
?>