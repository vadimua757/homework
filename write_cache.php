<?php
    $handle = fopen($cache_file, 'w');
    fwrite($handle, ob_get_contents());
    fclose($handle);
    ob_end_flush();
?>