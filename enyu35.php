<?php
//    // 1. 畫布
//
//    $img = imagecreate(400,80);
//
//    // 2. 開始畫
//
//    $yellow = imagecolorallocate($img,255,255,0);
//    $red = imagecolorallocate($img,255,0,0);
//    imagefilledrectangle ( $img , 0 , 0 , 400 , 80 , $yellow );
//    imagefilledrectangle ( $img , 0 , 40 , 400 , 80 , $red);
//
//    // 3. 記憶體 => 輸出(1. 畫面 2.檔案)
//    header("content-type: image/jpeg");
//    imagejpeg($img);
//    // 4. 清除
//    imagedestroy($img);
//
//
//    echo "<hr>"
//
    $rate = $_GET['rate'];

    // 1. 畫布

    $img = imagecreate(400,80);

    // 2. 開始畫

    $yellow = imagecolorallocate($img,255,255,0);
    $red = imagecolorallocate($img,255,0,0);
    imagefilledrectangle ( $img , 0 , 0 , 400 , 80 , $yellow );
    imagefilledrectangle ( $img , 0 , 0 , (int)(400 * $rate/100) , 80 , $red);

    // 3. 記憶體 => 輸出(1. 畫面 2.檔案)
    header("content-type: image/jpeg");
    imagejpeg($img);
    // 4. 清除
    imagedestroy($img);






?>
