<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��count()�����ݹ�ͳ������Ԫ�صĸ���</title>
</head>
<body>
<?php
$array = array("php" => array("PHP�����ο���ȫ","PHP���򿪷���������","PHP���ݿ�ϵͳ������ȫ�ֲ�"),
               "asp" => array("ASP���鼼�ɱ���")
         );												//����һ����ά����
echo count($array,COUNT_RECURSIVE);						//�ݹ�ͳ������Ԫ�صĸ���
?>
</body>
</html>
