<?php 
$conn=mysql_connect("localhost","root","root") or die('����ʧ��:' . mysql_error());
mysql_select_db("db_database21",$conn) or die ('���ݿ�ѡ��ʧ��:' . mysql_error());
mysql_query("set names gb2312");
?>
