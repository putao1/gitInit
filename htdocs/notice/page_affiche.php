
<?php
$conn=mysql_connect('127.0.0.1','root','');
mysql_select_db('notice',$conn);
mysql_query('set names gb2312');
$result=mysql_query('select count(*) as total from tb_affiche order by id desc',$conn);
//var_dump($result);
//$info=mysql_fetch_array($sql);
$message_count=mysql_result($result,0,"total");
//var_dump($message_count);
//print_r($message_count);
$page=@$_GET['page'];//最初没有此变量，结果为$page=null
//var_dump($page);
if(@$page==""){
	$page=1;//$page代表当前页
}
if(is_numeric($page)){
	$pagesize=4;
    $page_count=intval(ceil($message_count/$pagesize));
    //var_dump($page_count);
    //var_dump(is_numeric($page_count));
    $offset=($page-1)*$pagesize;//offset的设置
    $sql=mysql_query("select * from tb_affiche order by id desc limit $offset,$pagesize",$conn);
    if(!$sql){
    	echo "<font color='red'>暂无公告信息!</font>";
    }
    //var_dump($sql);
    $info=mysql_fetch_array($sql);
}
?>
<table form="page_affiche" align="center" border="1" bordercolor="grey" cellspacing="0" cellpadding="0">
	<tr bgcolor="#f4e4ff">
		<td>id</td>
		<td>title</td>
		<td>content</td>
		<td>createtime</td>
	</tr>
	<?php
do{

	?>
<tr>
<td><?php echo $info['id']; ?></td>
<td><?php echo $info['title']; ?></td>
<td><?php echo $info['content']; ?></td>
<td><?php echo $info['createtime']; ?></td>
</tr>
	<?php
    }while($info=mysql_fetch_array($sql));
    ?>
</table>
<table>
<tr>
<td width=37%>页次:<?php echo $page."/".$page_count;?>&nbsp;&nbsp;&nbsp;<?php echo "记录:".$message_count."条";?></td>
<td width=63% align="right">
<?php 
if($page-1>0){
	echo "<a href='page_affiche.php?page=1'>首页</a>";


//echo "<a href='page_affiche.php?page=".'$page-1'."'>上一页</a>";
//echo "<a href='page_affiche.php?page=$page+1'>下一页</a>";
//echo "<a href='page_affiche.php?page=$page_count'>尾页</a>";
?>
&nbsp;&nbsp;
<a href="page_affiche.php?page=<?php echo $page-1;?>">上一页</a>&nbsp;&nbsp;
<?php
}
if($page<$page_count){
?>
<a href="page_affiche.php?page=<?php echo $page+1;?>">下一页</a>&nbsp;&nbsp;

<a href="page_affiche.php?page=<?php echo $page_count;?>">尾页</a>
<?php
}
//echo "<a href='page_affiche.php?page=".($page+2)."'>下下页</a>";
?>
</td>
	
</tr>
</table>
<?php
echo $_SERVER['PHP_SELF'];
mysql_free_result($sql);
mysql_close($conn);
?>
