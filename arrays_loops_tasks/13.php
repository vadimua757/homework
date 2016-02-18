<?php
    $i = 1;
    while($i < 10){
        $j = 1;
        while($j < 10){
            $k = $i * $j;
            echo $i . "*" . $j . " = " . $k . "<br>";
            $j++;
        }
        echo "<br>";
        if ($i != 10)
            $i++;
    }
