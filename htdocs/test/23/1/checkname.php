<?php
	header('Content-type: text/html;charset=GB2312');		//ָ���������ݵı����ʽΪGB2312
	$link=mysql_connect("localhost","root","root");
	mysql_select_db("db_database23",$link);
	$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE' , $RequestAjaxString);			//Ajax������encodeURIComponent��Ҫ�ύ�����Ľ��б���
	mysql_query("set names gb2312");
	$username=$_GET[username];
	$sql=mysql_query("select * from tb_user where name='".$username."'");
	$info=mysql_fetch_array($sql);
	if ($info){
		echo "�ܱ�Ǹ!�û���[".$username."]�Ѿ���ע��!";
	}else{
		echo "ף����!�û���[".$username."]û�б�ע��!";
	}
?>
