<?php
    // 1 + 2 + 3 + ... + n = ?
    $sum = 0;
    $i = 1;
    while($i <= 173){
        $sum += $i;
        $i++;
    }
    echo "1 + 2 + 3 + ... + 173 = {$sum}";