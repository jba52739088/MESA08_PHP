<?php
    function enyu(){
        echo "enyu<br>";
    }
    function pLine(){
        echo "<hr>";
    }

    $i = 0;
    for(enyu(); $i < 10; pLine()){
        echo "$i<br>";
        $i++;
    }