
<!DOCTYPE html>
<html>
<head>
	<title>商品选择</title>
</head>
<body>
<form method="post" action="">
<tr align='center' valign="center">
<td bgcolor="#CC99FF"><div align="center">请输入商品名称
<input type="text" name="txt_shop">&nbsp; &nbsp;
<input type="submit" name='Submit' value='查询'></div></td>
</tr>
</form>
</body>
</html>
<?php
$link=mysql_connect('127.0.0.1','root','') or die("数据库连接失败，可能是数据库没有启动或者用户名密码错误".mysql_error());
$db=mysql_select_db('db_shop',$link);
//var_dump($db);die('db');
//mysql_query("set names gb2312");//设置编码格式
$sql=mysql_query("select * from tb_shop",$link);//选择所有的条目
//var_dump($sql);
$info=mysql_fetch_array($sql);

//var_dump($sql);
var_dump($info);
if(@$_POST['Submit']=='查询'){
    $txt=$_POST['txt_shop'];
    $sql=mysql_query("select * from tb_shop where mingcheng like '%".trim($txt)."%'",$link);
    $info=mysql_fetch_array($sql);
}

if($info==false){
	echo "<div align='center' style='color:#FF0000;font-size:12px'>对不起，您检索的结果不存在</div>";	
}
$nameArr= array('id', 'mingcheng','jianjie','addtime','dengji','xinghao','tupian','shuliang','typeid','huiyuan','pinpai');
do{

?>
<table border=1 align='center'>

<tr>
<td>id</td>
<td>mingcheng</td>
<td>jianjie</td>
<td>addtime</td>
<td>dengji</td>
<td>xinghao</td>
<td>tupian</td>
<td>shuliang</td>
<td>typeid</td>
<td>huiyuan</td>
<td>pinpai</td>
</tr>
<tr align="left">
<?php
foreach ($nameArr as $value) {
	echo '<td>'.$info[$value].'</td>';
 
}
?>
</tr>  
</table>
<?php
}
while ($info=mysql_fetch_array($sql)); 
?>