<?php
$conn=mysql_connect('127.0.0.1','root','');
mysql_select_db('notice',$conn);
mysql_query('set names gb2312');
$sql=mysql_query('select * from tb_affiche');
$info=mysql_fetch_object($sql);

if(!$info){
	echo '暂时没有公告信息，'.'<a href=add_affiche.php>'."点击".'</a>'.'添加';
	return false;
}

?>
<form name="form1" action="modify.php" method="post">
<table align="center" border="1" cellpadding="0" cellspacing="0">
	<tr bgcolor="grey" cellpadding="0" cellspacing="0">
	<td>id</td>	
	<td>title</td>	
	<td>content</td>
	<td>createtime</td>
	<td>edit</td>
	</tr>
	
	<?php
    do{
	?>
    <tr>
    <td><?php echo $info->id;?></td>
    <td><?php echo $info->title;?></td>
    <td><?php echo "$info->content";?></td>
    <td><?php echo "$info->createtime";?></td>
    <td>
    <a href="modify.php?id=<?php echo $info->id;?>" >
    <img src='./images/update.gif'>
    </a></td>
    
    </tr>

	<?php
    }while($info=mysql_fetch_object($sql)); 
	?>
</table>
</form>
<?php
mysql_free_result($sql);
mysql_close($conn);

?>