<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ʹ��flock����</title>
</head>
<body>
<?php
	$filename = '08.txt';						//����Ҫ�򿪵��ļ�������
	$fd = fopen($filename,'w');					//��w��ʽ���ļ�
	flock($fd, LOCK_EX);						//�����ļ������빲��
	fwrite($fd, "hightman1");					//���ļ���д������
	flock($fd, LOCK_UN);						//�������
	fclose($fd);								//�ر��ļ�ָ��
	readfile($filename);						//����ļ�����
?>
</body>
</html>
