<?php

    date_default_timezone_set("Asia/Taipei");

    $dir = opendir("/");
    while ($cont = readdir($dir)){
        echo "{$cont}<br>";
    }

    echo "<hr>";

    $dir = opendir(".");
    while ($cont = readdir($dir)){
        echo "{$cont}<br>";
    }

    echo "<hr>";

$dir = @opendir(".") or die("server is busy");
while ($cont = readdir($dir)){

    echo $cont.":";
    if(is_dir("./{$cont}")){
        echo "[DIR] :";
    }elseif (is_file("./{$cont}")){
        echo "[FILE] :";
    }
    echo "<br>";
}

echo "<hr>";

$dir = @opendir(".") or die("server is busy");
while ($cont = readdir($dir)){

    echo $cont.":";
    if(is_dir("./{$cont}")){
        echo "[DIR] :";
    }elseif (is_file("./{$cont}")){
        echo "[FILE] :";
    }
    echo filemtime("./{$cont}");
    echo "<br>";
}

echo "<hr>";

$dir = @opendir(".") or die("server is busy");
while ($cont = readdir($dir)){

    echo $cont.":";
    if(is_dir("./{$cont}")){
        echo "[DIR] :";
    }elseif (is_file("./{$cont}")){
        echo "[FILE] :";
    }
    echo date("Y-m-d H:I:s",filemtime("./{$cont}"));
    echo "<br>";
}

echo "<hr>";

if (copy('./dir1/file1', './dir2/file2')){
    echo 'copy ok';
}else{
    echo 'copy Fall';
}

unlink('./dir2/file2');











echo "<hr>";

$dir = @opendir("test123") or die("server is busy");
    while ($cont = readdir($dir)){
        echo "{$cont}<br>";
    }


