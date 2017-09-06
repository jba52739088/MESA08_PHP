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


    //

    $cart->addItem('P042',72);
    $cart->addItem('P044',7);
    $cart->addItem('P023',13);
    $cart->rmItem('P002');
?>

<a href="enyu43.php">pay</a>
