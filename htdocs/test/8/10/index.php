<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��ȡ�ļ����ֵ</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 5px;
	margin-top: 5px;
}
-->
</style></head>

<body>
<form name="form1" method="post" action="index.php">
<input type="file" name="file" size="15" >
<input type="submit" name="upload" value="�ϴ�" >
</form>
<?php
	echo $_POST[file];							//���Ҫ�ϴ��ļ��ľ���·��
?>
</body>
</html>
