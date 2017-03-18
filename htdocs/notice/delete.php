<?php
$id=$_GET['id'];
$conn=mysql_connect('127.0.0.1','root','');
mysql_select_db('notice',$conn);
$sql=mysql_query("delete from tb_affiche where id=$id");
//$info=mysql_fetch_object($sql);
//var_dump($sql);
if($sql){
	//echo "<script>alert('成功删除id='.$id.'的公告信息');history.back();windows.location.href('delete_affiche.php');</script>";


?>
<script>
alert('成功删除公告信息');history.back();windows.location.href('delete_affiche.php');
</script>
<?php
}
if(is_resource($sql)){
mysql_free_result($sql);
mysql_close($conn);
}
?>