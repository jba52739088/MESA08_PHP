<?php
    $mysqli = new mysqli('localhost','root', 'root', 'iii');
    $account = $_GET['account'];
    $password = $_GET['password'];
    $realname = $_GET['realname'];
    $sql =
        "INSERT INTO member (account,password,realname) VALUES ('{$account}','{$password}','{$realname}')";
    $mysqli->query($sql);
    header("Location: enyu55.php");