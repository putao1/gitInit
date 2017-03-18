<?php
header("content-type:image/jpeg");
/*
$im=imagecreate(200,60);
imagecolorallocate($im, 255, 66, 159);//画布颜色
imagegif($im);
*/
$im=imagecreatefromjpeg("photo.jpg");
$textcolor=imagecolorallocate($im, 60, 73, 139);

$font="C:\Windows\Fonts\Verdana.ttf";
$motto=iconv("GB2312//IGNORE", "utf-8", "heaven river");//定义输出字体串
//$motto="长";
imagettftext($im, 220, 0, 480, 340, $textcolor, $font, $motto);
imagejpeg($im);
imagedestroy($im);
?>