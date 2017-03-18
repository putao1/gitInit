<!DOCTYPE html>
<html>
<head>
	<title>radio单选按钮</title>
</head>
<body>
<form method="post" action="">
<input type="checkbox" name="displine[]" value="语文">语文
<input type="checkbox" name="displine[]" value="数学">数学
<input type="checkbox" name="displine[]" value="英语">英语
<input type="submit" name="submit" value="提交">
</form>
</body>
</html>

<?php
var_dump($_POST['displine'][0]);
if($_POST['displine']!=null){
	echo "您选择的结果是：";
	for($i=0;$i<count($_POST['displine']);$i++)
		echo $_POST['displine'][$i];"&nbsp;&nbsp";
}

?>