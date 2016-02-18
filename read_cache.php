<?php
    $cache_time = 300;
    $file = strrchr($_SERVER["SCRIPT_NAME"], "/");
    $file = substr($file, 1);
    $cache_file = "D:/server/homework/1.html";
    if (file_exists($cache_file)) {
        if ((time() - $cache_time) < filemtime($cache_file)) {
            echo file_get_contents($cache_file);
            exit;
        }
    }
        ob_start();
?>