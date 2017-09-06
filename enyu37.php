<?php
// 1. 畫布 (1.白 2.有底圖)

$img = imagecreatefromjpeg("./image/IMG_1140.JPG");

// 2. 開始畫
$white = imagecolorallocate($img,255,255,255);
imagettftext($img,100,45,400,2000,$white,"./fonts/fireflysung.ttf","Hello!!!");
// 3. 記憶體 => 輸出(1. 畫面 2.檔案)
//header("content-type: image/jpeg");
imagejpeg($img,"./upload/enyu.jpg");
// 4. 清除
imagedestroy($img);