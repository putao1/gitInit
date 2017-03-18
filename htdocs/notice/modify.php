<?php
$id=$_GET['id'];
$conn=mysql_connect('127.0.0.1','root','');
mysql_select_db('notice',$conn);
mysql_query('set names gb2312');
//$sql=mysql_query("select * from tb_affiche where id='".$id."'",$conn);
$sql=mysql_query("select * from tb_affiche where id=$id",$conn);
//var_dump(expression)
//echo "select * from tb_affiche where id='".$id."'";
$info=mysql_fetch_object($sql);
//var_dump($info);

?>
<form name='modify' action="" method="post">
<table align="center" width="520" height="212" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr align="center">
	<td align="center">公告主题：</td>
	<td align="left"><input type="text" name="txt_title" id="txt_title" size="40" value="<?php echo $info->title;?>">&nbsp;<font color="red">*</font></td>
</tr>
<tr>
	<td align="center">公告内容:</td>
	<td align="left"><textarea name="txt_content" cols="30" rows="5" ><?php echo $info->content;?></textarea></td>
	</td>
</tr>
<tr>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td align="right"> <input type="submit" name="Submit" value="保存" class="btn_grey">&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td align="left"><input type="reset" name="chongzhi" value="重置"></td>
</tr>
</table>
<?php

if(@$_POST['Submit']=="保存"){
	$txt_title=$_POST['txt_title'];
	$txt_content=$_POST['txt_content'];
	//var_dump($txt_title);
	//var_dump($txt_content);
	date_default_timezone_set("Asia/Hong_Kong");
	$update_time=date("Y-m-d H:i:s");
	//$modify=mysql_query('update tb_affiche set title='.$txt_title.',content='.$txt_content.',createtime='.$update_time.' where id='.$id,$conn) or die("数据库更新失败".mysql_error());
	//$modify=mysql_query('update tb_affiche set title='.$txt_title.',content='.$txt_content.',createtime='.$update_time.' where id='.$id,$conn) or die("数据库更新失败".mysql_error());
	//echo "update tb_affiche set title='".$txt_title."',content='".$txt_content."',createtime='".$update_time."' where id='".$id."'";
	//$modify=mysql_query("update tb_affiche set title='".$txt_title."',content='".$txt_content."',createtime='".$update_time."' where id='".$id."'",$conn);
	//$modify=false;
	$modify=mysql_query("update tb_affiche set title='$txt_title',content='$txt_content',createtime='$update_time' where id=$id");
	if($modify){
		echo "<script>alert('恭喜你，信息修改成功');history.back();windows.location.href('modify.php?id=$id');</script>";
	}
	else
		echo "<script>alert('哎哟，信息修改失败了~~');history.back();windows.location.href('modify.php?id=$id');</script>";
}
mysql_free_result($sql);
mysql_close($conn);
?>