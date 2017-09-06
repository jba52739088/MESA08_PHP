<?php
    $p = array(1=>0,0,0,0,0,0,0,0,0);        //1=>0, 2=>0,...
    for ($i=0; $i<100; $i++){
        $point = rand(1,6);
        $p[$point]++;
    }
    foreach ($p as $k => $v){
        echo "{$k}點出現{$v}次<br>";
    }

    echo "<hr />";


    $q = array(1=>0,0,0,0,0,0,0,0,0);        //1=>0, 2=>0,...
    for ($j=0; $j<100; $j++){
    $point = rand(1,9);
    $q[$point>=7 ? $point-3:$point]++;
    }
    foreach ($q as $x => $y){
    echo "{$x}點出現{$y}次<br>";
    }
    echo "作弊的";