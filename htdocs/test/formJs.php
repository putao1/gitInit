<!DOCTYPE html>
<html>
<head>
	<title>应用js判断表单元素是否为空</title>
</head>
<body>
<form name="formJS" method="post">
<table align="center">
	<tr>
		<td>用户名:</td>
		<td><input type="text" name="user"></td>

	</tr>
	<tr>
	<td>密码:</td>
		<td><input type="password" name="pwd"></td>
	</tr>
    <tr>
	<td><input type="submit" name="login" value="登录" onclick="return mycheck()"></td>
	<td><input type="reset" name="chongzhi" value="重置"></td>
	</tr>
</table>
</form>

</body>
</html>
<script type="text/javascript">
	function mycheck(){
        if (formJS.user.value=="") {
        	alert("用户名称不能为空");
        	formJS.user.focus();
        	return false;
        }
        if (formJS.pwd.value=="") {
        	alert("密码不能为空");
        	formJS.user.focus();
        	return false;
        }
	}

</script>