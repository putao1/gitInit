<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ʹ��mcrypt����ܽ���</title>
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
	$str = "�����ܵ����ݣ����ʱ�ѱ����� ���������ٻ���";
	$key = "key:111";
	$cipher = MCRYPT_DES;
	$modes = MCRYPT_MODE_ECB;
	//��ʼ������
	$iv = mcrypt_create_iv(mcrypt_get_iv_size($cipher,$modes),MCRYPT_RAND);
	echo "����ǰ��".$str."<p>";
	//���ܣ�
	$str_encrypt = mcrypt_encrypt($cipher,$key,$str,$modes,$iv);
	echo "���ܺ�".$str_encrypt." <p>";
	$str_decrypt = mcrypt_decrypt($cipher,$key,$str_encrypt,$modes,$iv);
	echo "��ԭ��".$str_decrypt;
?>
</body>
</html>