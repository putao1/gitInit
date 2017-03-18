<?php
$conn=mysql_connect('127.0.0.1','root','');
mysql_select_db('notice',$conn);
$sql=mysql_query('select * from tb_affiche',$conn);
$row=mysql_fetch_object($sql);
?>
<div align="center">
    请输入要查询的内容：
    <input type="text" name="search_affiche">&nbsp;
	<input type="submit" name="Submit">
</div>
<br>


<?php
if(!$row){
	echo "<div align='center'><font color='red' align='center'>没有公告信息</font></div>";
	return false;
}
?>
<table align="center" border="1" cellspacing="0" cellpadding="0">
<form name="delete" action="" method="post">
	<tr align="center" bgcolor="grey">	
	<td>id</td>
	<td>title</td>
	<td>content</td>
	<td>createtime</td>
	<td>删除</td>
	</tr>
</form>
<?php
do{
?>
<tr>
	<td><?php echo $row->id;?></td>
	<td><?php echo $row->title;?></td>
	<td><?php echo $row->content;?></td>
	<td><?php echo $row->createtime;?></td>
	<td><a href='delete.php?id=<?php echo $row->id;?>'><img src='./images/delete.gif'></a></td>
</tr>
<?php	
}while($row=mysql_fetch_object($sql));
?>
</table>
<?php
mysql_free_result($sql);
mysql_close($conn);
?>
