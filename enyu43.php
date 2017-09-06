<?php
    include 'enyuapi.php';
    session_start();

    $cart = $_SESSION['cart'];

    $name = $cart->getMember()->getName();

    echo "page2, {$name}<hr>";
    $list = $cart->getBuyList();
    foreach($list as $k => $v){
        echo "{$k} -> {$v}<hr>";
    }