<?php
	include_once "conn/conn.php";		//�������ݿ�
	require_once("system/system.inc.php");  //����ָ�����ļ�
	$sql = "select * from tb_public";	//��д��ѯ���
	$rst = mysql_query($sql,$conn);					//ִ�в�ѯ����
	$arr=array();
	while($myrow=mysql_fetch_array($rst)){
	 array_push($arr,$myrow);	
	}	
	$smarty->assign('arr',$arr);							//�����صĽ�����洢��ָ����Smartyģ�������
	$smarty->display('index.html');							//ִ��ģ���ļ�
?>