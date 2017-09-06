<?php
    echo "<hr>";
    $upload = $_FILES['upload'];

    var_dump($upload);

    echo "<hr>";
    $upload = $_FILES['upload'];

    foreach ($upload['error'] as $k => $v){
        if($v == 0){
            copy("{$upload['tmp_name'][$k]}",
                "./upload/{$upload['tmp_name'][$k]}");
        }
    }