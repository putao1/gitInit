<?php
$conn=mysql_connect('127.0.0.1','root','');
mysql_select_db('notice',$conn) or die("数据库访问错误".mysql_error());
mysql_query("set names gb2312");
$title=$_POST['txt_title'];
$content=$_POST['txt_content'];
date_default_timezone_set("Asia/Hong_kong");
$createtime=date("Y-m-d H:i:s");//获取系统当前时间
$sql=mysql_query("insert into tb_affiche(title,content,createtime) values('$title','$content','$createtime')");
//$sql=mysql_query("delete from tb_affiche where id=1");
echo "<script>alert('公告信息添加成功！');window.location.href='add_affiche.php';</script>";
mysql_free_result($sql);//关闭结果集
mysql_close($conn);//关闭Mysql服务器
?>