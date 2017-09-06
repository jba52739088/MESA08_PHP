<?php
    //1.
    $upload = $_FILES['upload'];

    foreach ($upload as $k => $v){
        echo "{$k} : {$v}<br>" ;
    }

//    move_uploaded_file("$upload","./dir2");


    echo "<hr>";
    $upload = $_FILES['upload'];
    if ($upload['error']==0){
        if(copy("{$upload['tmp_name']}",
            "./upload/{$upload['name']}")) {
            echo 'upload OK';
        }else{
            echo 'copy error';
        }
    }else{
        echo 'upload Fall';
}