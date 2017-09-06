<?php

class Bike {
    var $color;
    private $speed = 10;

        //建構式(方法/子) => 物件初始化
//    function  __construct(){
    function  __construct($s = 0){
//        echo "OK";
//        $this->speed = 0;
        $this->speed = $s;
    }

    function upSpeed(){
//        $this->speed *= 1.2;
        $this->speed =($this->speed<1)?1:$this->speed * 1.2;
    }

    function  downSpeed(){
//        $this->speed *= 0.7;
        $this->speed =($this->speed<1)?1:$this->speed * 0.7;
    }

    function getSpeed(){
        return $this->speed;
    }


}

$myBike = new Bike();
//$urBike = new Bike();
$urBike = new Bike(4);

echo "myBike : {$myBike->getSpeed()}<br>";
echo "urBike : {$urBike->getSpeed()}<br>";

////$myBike->speed = 1;
////$urBike->speed = 1;
//
//$myBike->upSpeed();
//$myBike->upSpeed();
//$myBike->upSpeed();
//$myBike->upSpeed();
//$myBike->upSpeed();
//$myBike->upSpeed();
//$myBike->upSpeed();
//$myBike->upSpeed();
//$myBike->upSpeed();
//$myBike->upSpeed();
//$myBike->upSpeed();
//$myBike->upSpeed();
//$myBike->upSpeed();
//
//
////echo "myBike : {$myBike->speed}<br>";   can't get it if speed is private
////echo "uyBike : {$urBike->speed}<br>";
//
//echo "myBike : {$myBike->getSpeed()}<br>";
//echo "uyBike : {$urBike->getSpeed()}<br>";