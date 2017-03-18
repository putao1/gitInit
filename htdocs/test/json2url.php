<!DOCTYPE html>
<html>
<head>
	<title>"json串转换为url参数"</title>
</head>
<body>
<form action="json2url.php" method="post">
<td>请输入json串：</td>
<input type="textarea" width="180" height="100" colspan=10 rowspan=20 name="json">
<input type="submit" value="json串转换为url参数">
</form>

<?php
//$json={name:tm,passwd:111,data:2008,hello:1,id:1}; 示例
$json=$_POST['json'];
$json=trim($json,"{} ");
$json=str_ireplace(":", "=", $json);
$json=str_ireplace(",", "&", $json);
echo $json;

?>
</body>
</html>

