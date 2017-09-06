<?php
include 'enyuapi.php';
start_session(30);  //session 30秒過期

$var1 = 12;
$var2 = array(1,2,3);
$var3 = false;
$brad = new Brad;

$var1 = $_SESSION['var1'];  //12
$var2 = $_SESSION['var2'];
$var3 = $_SESSION['var3'];
$brad = $_SESSION['brad'];  //$brad的物件實體

$brad->Var1 = 34;

$var1 = 34;

var_dump($var1);
echo '<hr>';
var_dump($var2);
echo '<hr>';
var_dump($var3);
echo '<hr>';
var_dump($brad);
echo '<hr>';
