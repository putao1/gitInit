<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��ȡ�ı������Ϣ</title>
</head>

<body>
<form name="form1" method="post" action="">
<table width="509" border="0">
 
  <tr>
    <td>�û�����</td>
    <td><input type="text" name="user" size="20" ></td>
    <td> ��&nbsp;&nbsp;�룺</td>
    <td><input name="pwd" type="password" id="pwd" size="20" ></td>
    <td><input name="submit" type="submit" id="submit" value="��¼" /></td>
  </tr>
</table>


</form>
<?php
if($_POST["submit"]=="��¼"){
	echo "��������û���Ϊ��".$_POST[user]."&nbsp;&nbsp;����Ϊ��".$_POST[pwd];
}
?>
</body>
</html>
