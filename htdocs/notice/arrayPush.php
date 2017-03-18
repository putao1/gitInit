<?php
$conn=mysql_connect('127.0.0.1','root') or die("数据库访问失败".mysql_error());
mysql_select_db("notice",$conn);
mysql_query("set names gb2312");
$sql=mysql_query("select * from tb_affiche order by createtime desc");

$array_title = array();
$array_content = array();
$arrays=array();
while($info=mysql_fetch_object($sql)){
	array_push($array_title, $info->title);
	array_push($array_content, $info->content);
}
array_push($arrays,$array_title,$array_content);
//var_dump($arrays);
print_r($arrays);
?>