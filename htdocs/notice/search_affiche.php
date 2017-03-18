<form name="search" method="post" action="">
<div align="center">请输入要查询的主题或内容
<input type="text" name="searchNotice">
<input type="submit" name="Submit" value="查询">
</div>
<br>
<table align="center" border="1" cellspacing="0" cellpadding="0">
<tr bgcolor="grey" cellspacing="0" cellpadding="0">
	<td>id</td>
	<td>title</td>
	<td>content</td>
	<td>createtime</td>
</tr>



<?php
$conn=mysql_connect('127.0.0.1','root') or die("数据库访问失败".mysql_error());
mysql_select_db("notice",$conn);
mysql_query("set names gb2312");
$sql=mysql_query("select * from tb_affiche order by createtime desc");
$info=mysql_fetch_object($sql);
//var_dump($info);
if(@$_POST['Submit']=="查询"){
	$searchNotice=$_POST['searchNotice'];
	$sql=mysql_query("select * from tb_affiche where title like '%".trim($searchNotice)."%' or content like '%".trim($searchNotice)."%' order by createtime desc");
	$info=mysql_fetch_object($sql);
	}
	if(!$info){
          //echo "<font color='red'>您搜索的信息不存在，请用类似的关键字重新搜索</font>";
          echo "<script>alert('您搜索的信息不存在,请用类似的关键字重新搜索');</script>";
          return false;
	}
	do{
?>
<tr>
<td>
	<?php echo $info->id;?>
</td>
<td>
	<?php echo $info->title;?>
</td>
<td>
	<?php echo $info->content;?>
</td>
<td>
	<?php echo $info->createtime;?>
</td>
</tr>

<?php
}while($info=mysql_fetch_object($sql));

?>
</table>
<?php
$num=mysql_num_rows($sql);

?>
<div align="right"><?php echo '符合条件的记录一共'."<font color='blue'>".$num.'</font>'."条";?></div>
<?php
mysql_free_result($sql);//关闭结果集
mysql_close($conn);//关闭mysql数据库服务器
?>