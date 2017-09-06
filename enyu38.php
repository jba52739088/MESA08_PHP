<?php
// 1. 畫布 (1.白 2.有底圖)

$imgS = imagecreatefromjpeg("./image/w.jpg");
$imgT = imagecreate(200,200);

// 2. 開始畫
$imgSW = imagesx($imgS);
$imgSH = imagesy($imgS);
//echo "{$imgSW} X {$imgSH}";

if ($imgSH>$imgSW){
    //長型
    $imgTH = 200;
    $imgTW = $imgSW * $imgTH / $imgSH;
}else{
    //寬型
    $imgTW = 200;
    $imgTH = $imgSH * $imgTW / $imgSW;
}
//echo "{$imgTW} X {$imgTH}";
$white = imagecolorallocate($imgT,255,255,255);
imagefilledrectangle($imgT,0,0,200, 200,$white);
imagecopyresampled ( $imgT, $imgS , 0 , 0 , 0 , 0, $imgTW, $imgTH, $imgSW, $imgSH);


// 3. 記憶體 => 輸出(1. 畫面 2.檔案)
header("content-type: image/jpeg");
imagejpeg($imgT);
// 4. 清除
imagedestroy($imgS);
imagedestroy($imgT);

