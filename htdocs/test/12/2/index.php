<?php
header("content-type:image/jpeg");       //�������Ϊͼ������
$im=imagecreatefromjpeg("images/photo.jpg");		//������Ƭ
$textcolor=imagecolorallocate($im,56,73,136);//����������ɫΪ��ɫ��ֵΪRGB��ɫֵ
$fnt="c:/windows/fonts/simhei.ttf";      //��������
$motto=iconv("gb2312","utf-8","����ɽ���");     //����������崮
imageTTFText($im,220,0,480,340,$textcolor,$fnt,$motto);      //дTTF���ֵ�ͼ��
imagejpeg($im);       //����JPEGͼ��
imagedestroy($im);    //����ͼ�Σ��ͷ��ڴ�ռ�
?>
