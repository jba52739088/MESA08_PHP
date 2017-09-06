<?php
    if(!isset($_GET['filename']))
        header("Locatinn: enyu.php");

    $filename = $_GET['filename'];
    $content  = $_GET['content'];

    $fp = fopen("./dir2/{$filename}",'w');
    fwrite($fp, $content);
    fclose($fp);

    header("Location: ./dir2/{$filename}");