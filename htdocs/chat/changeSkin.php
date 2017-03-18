<?php
session_start();

?>

<form method="post" action="changeSkin.php">
	

<table align="center">
<td>请输入想要换的皮肤颜色<input type="text" name="color"></td>	
<td><input type="submit" name="Submit" value="提交皮肤颜色"></td>
</table>
</form>
<?php
@$_SESSION['skin']=$_POST['color'];
if(!empty($_SESSION['skin'])){


?>
<table bgcolor="<?php echo $_SESSION['skin'];?>" width=200 height=100 align="center">
	<td>皮肤颜色是<?php echo $_SESSION['skin'];?></td>
</table>
<?php
}else{
?>
<table bgcolor="grey" width=200 height=100 align="center">
	<td>皮肤默认颜色是灰色</td>
</table>
<?php
}
?>