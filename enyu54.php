<?php
    $mysqli = @new mysqli(
    'localhost',
    'root',
    'root',
    'iii');

//    $sql = "INSERT INTO member (account,password,realname)" .
//            "VALUES ('brad','234','Brad')";

//    $sql = "DELETE FROM member WHERE id = 4";

//    $sql = "UPDATE member SET account='tony',password='321' WHERE id=2";

    $sql = "SELECT * FROM member";

//    $ret = $mysqli->query($sql);

    $result = $mysqli->query($sql);
//    $data = $result->fetch_assoc();
//
////    echo $mysqli->affected_rows;
////    var_dump($ret);
//    foreach ($data as $k => $v){
//        echo "{$k} : {$v}<br>";
//}
//    echo "<hr>";
//
//while($data = $result->fetch_assoc()){
//    echo "{$data['id']} : {$data['account']} : {$data['realname']}<br>";
//}

    $data = $result->fetch_object();
    echo $data->account;