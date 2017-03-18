<?php
$starttime=time();
$link=mysql_connect('localhost','root','')or die("数据库连接失败！！可能是数据库没有启动或者是用户名密码错误".mysql_error());
if($link){
    //$endtime=time();
    //$spend=$endtime-$starttime;
	echo "恭喜你，数据库连接成功~~连接时间是";
}

$db_selected=mysql_select_db('db_shop',$link);
if ($db_selected){
	echo '<br>数据库选择成功';
}

//$result=mysql_query("insert into tb_member values('juanjuan','123456','YimmyCheng@163.com')",$link) or die("数据库插入失败".mysql_error());
//print_r($result);
//$result=mysql_query("update tb_member set user='li',email='li@youeryuan.com' where user='juanjuan'",$link) or die("数据库修改失败".mysql_error().mysql_errno());
$result=mysql_query("delete from tb_member where user='li'",$link) or die("数据库删除失败".mysql_error().mysql_errno());
//print_r($result);
$result=mysql_query("selcet * from tb_member",$link);
$desc=mysql_query('desc tb_member');
print_r($result);
?>