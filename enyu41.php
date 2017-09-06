<?php
include 'enyuapi.php';
session_start();

$member = new Member('001','Brad',1);
//    echo var_dump($member);

$cart = new Cart($member);
$_SESSION['cart'] = $cart;

$cart->addItem('P001',20);
$cart->addItem('P002',14);
$cart->addItem('P002',17);
//因為P001已經存在 指令無效
$cart->edItem('P001',41);

$list = $cart->getBuyList();

//-----------------------------------

echo "Member : {$member->getName()}, Welcome<br>";
echo "<hr>";

foreach ($list as $k => $v){
    echo "{$k} : {$v}<br>";
}
?>

<a href="enyu42.php">next page</a>


