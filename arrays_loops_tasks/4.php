<?php
    $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
        foreach($arr as $key => $value) {
            echo $key . "<br />";
        }
        echo "<p>";
        foreach($arr as $key=>$value){
            echo $value . "<br />";
        }