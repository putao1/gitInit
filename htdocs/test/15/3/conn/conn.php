<?php
	$conn=mysql_connect("localhost","root","root") or die("���ݿ�����ʧ��".mysql_error());	//���ӷ�����
	mysql_select_db("db_database15",$conn);		//�������ݿ�
	mysql_query("set names gb2312");			//���ñ����ʽ
?>
