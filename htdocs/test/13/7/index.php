<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ļ�ָ�뺯��</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style></head>
<body>
<?php
$filename = "07.txt";
$total = filesize($filename);
if(is_file($filename)){
	echo "�ļ����ֽ�����".$total."<br>";
	$fopen = fopen($filename,'rb');
	echo "��ʼָ��λ���ǣ�".ftell($fopen)."<br>";
	fseek($fopen,33);
	echo "ʹ��fseek()������ָ��λ�ã�".ftell($fopen)."<br>";
	echo "�����ǰָ���������ݣ�".fgets($fopen)."<br>";
	if(feof($fopen))
		echo "��ǰָ��ָ���ļ�ĩβ��".ftell($fopen)."<br>";
	rewind($fopen);
	echo "ʹ��rewind()������ָ���λ�ã�".ftell($fopen)."<br>";
	echo "���ǰ33�ֽڵ����ݣ�".fgets($fopen,33);
	fclose($fopen);
}else{
	echo "�ļ�������";
}
?>
</body>
</html>