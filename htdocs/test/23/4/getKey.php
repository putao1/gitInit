<?php
$link=mysql_connect("localhost","root","root");
mysql_select_db("db_database24",$link);
//$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE', $RequestAjaxString);			//Ajax������encodeURIComponent��Ҫ�ύ�����Ľ��б���
mysql_query("set names gb2312");
$key=$_GET[key];
if($key!=""){
	$sql=mysql_query("select * from tb_key where keyvalue like '".$key."%' ORDER BY keyvalue");
	$info=mysql_fetch_array($sql);
if($info){
		header('Content-type: text/xml;charset=GB2312');		//ָ���������ݵı����ʽΪGB2312
		echo "<?xml version='1.0' encoding='gb2312' ?>";	
		echo "<myKeys>";
		do{
 			$keyvalue=$info[keyvalue];
			print "<mykey>".$keyvalue."</mykey>";
		}while($info=mysql_fetch_array($sql));
		echo "</myKeys>";	
	}
}
?>