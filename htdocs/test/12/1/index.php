<?php
$im = imagecreate(200,60);                      //����һ������
$white = imagecolorallocate($im, 225,66,159);     //���û����ı�����ɫΪǳ��ɫ
imagegif($im);                               //���ͼ��
?>
