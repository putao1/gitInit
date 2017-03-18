<table align="center">
	<form method="post" action="">
		<tr>
			<td>用户名:</td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
			<td>密码:</td>
			<td><input type="password" name="pwd"></td>
		</tr>
		<tr>
			<td align="middle"><input type="submit" name='login' value="登录"></td>
		</tr>
	</form>
</table>
<?php
if($_POST['login']){
	//var_dump(each($_POST));exit;

	while (list($name,$value)=each($_POST)) {
		//var_dump(list($name,$value));exit;
		//if($name!="login")
			echo "$name=$value   ";
	}
}
?>