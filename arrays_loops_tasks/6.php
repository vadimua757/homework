<?php
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    $en;
    $ru;
    $i=0;
        foreach($arr as $key => $value){
            $en[]=$key;
            $ru[]=$value;
            $i++;
        }
    var_dump($en);
    echo "<br>";
    var_dump($ru);
