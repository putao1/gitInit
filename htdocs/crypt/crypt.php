<?php
require('../sql/sql.class.php');
$Conn=new ConnDB('mysql','127.0.0.1','root','','db_shop');
$sqlId=$Conn->getConnId();

//var_dump($sqlId);


?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=gb2312">
	<title>检测用户名是否存在</title>
	<style type="text/css">
		.style1 {font-size: 12px}
		.style2 {
			font-size:18px;
		    font-weight: bold;
		}
	</style>
</head>
<body>

</body>
</html>

<form method="post" action="">
	<table align="center">
		<tr>
			<td class="style2">
				用户名：
			</td>
			<td>
				<input type="text" name="username" size=20>
			</td>
			<td>
				<input type="submit" name="check" value="检测用户名">
			</td>
		</tr>
	</table>
</form>

<?php
if($_POST['check']){
$username=$_POST['username'];

$user=trim($username);
//var_dump($user);

if($user!=""){
$sqlstr="select user from tb_member where user='".$user."'";
$AdminDB=new AdminDB();
$sql=$AdminDB->ExecSQL($sqlstr,$sqlId);
//var_dump($sql);
//die('qing1');
if($sql){
	echo "<font color='red'>".$user."用户名已存在</font>";
}else{
	echo $user."用户名可以使用";
}
}
else{
	echo "用户名不能为空";
}
}
?>