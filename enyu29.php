<?php
    $fp = fopen("./dir1/file2",'w+');

    fwrite($fp,"Hello, World\nOK456\nEnYu");

    fclose($fp);