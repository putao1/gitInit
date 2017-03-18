<!DOCTYPE html>
<html>
<head>
	<title>select</title>
</head>
<body>
<form method="post">
<select name="test[]" size=3 multiple>
	<option value="语文">语文</option>
    <option value="数学">数学</option>
    <option value="英语">英语</option>
</select>

<input type="submit" name="submit" value="提交">
</form>

<?php
echo "您选择的是：";
print_r($_POST[test]);
echo "总个数是:".count($_POST[test]);
echo $_POST[test][0];
?>
</body>
</html>