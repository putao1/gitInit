<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��ȡ��ѡ��ť��ֵ</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<form action="" method="post" name="form1">
�Ա�
<input name="sex" type="radio" value="��" checked>��
      <input type="radio" name="sex" value="Ů">Ů
<input type="submit" name="Submit" value="�ύ">
</form>
<?php
echo "��ѡ����Ա�Ϊ��".$_POST["sex"];
?>
</body>
</html>
