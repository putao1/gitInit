<?php
$conn=mysql_connect("localhost","root","root") or die("���ݿ���������Ӵ���".mysql_error());
mysql_select_db("db_database18",$conn) or die("���ݿ���ʴ���".mysql_error());
mysql_query("set names gb2312");
$id=$_GET[id];
$sql=mysql_query("delete from tb_affiche where id=$id");
if($sql){
	echo "<script>alert('������Ϣɾ���ɹ���');history.back();window.location.href='delete_affiche.php?id=$id';</script>";
}else{
	echo "<script>alert('������Ϣɾ��ʧ�ܣ�');history.back();window.location.href='delete_affiche.php?id=$id';</script>";
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

