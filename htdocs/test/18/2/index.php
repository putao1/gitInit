<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ѡ��MySQL���ݿ�</title>
</head>

<body>
<?php
$link = mysql_connect("localhost", "root", "root") or die("�������ӵ����ݿ�����������������ݿ������û�������������û�����������".mysql_error());   //����Mysql������
$db_selected=mysql_select_db("db_database18",$link);
//$db_selected=mysql_query("use db_database18",$link);
if($db_selected){
echo "���ݿ�ѡ��ɹ�!";
}
?>
</body>
</html>
