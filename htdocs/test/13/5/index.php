<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ʹ��fwrite��file_put_contents����д������</title>
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
	$filepath = "05.txt";
	$str = "����ɴ���׷��	ֻ�ǵ�ʱ���Ȼ<br>";
	echo "��fwrite����д���ļ���";
	$fopen = fopen($filepath,'wb') or die('�ļ�������');
	fwrite($fopen,$str);
	fclose($fopen);
	readfile($filepath);
	echo "<p>��file_put_contents����д���ļ���";
	file_put_contents($filepath,$str);
	readfile($filepath);
?>
</body>
</html>
