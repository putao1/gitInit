<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>soft��hard���б�ǵ�����</title>
</head>

<body>
<form name="form1" method="post" action="index.php">
    <textarea name="a" cols="20" rows="3" wrap="soft" id="a">��ʹ�õ�����س���������󲻻��У�</textarea>
    <textarea name="b" cols="20" rows="3" wrap="hard" id="b">��ʹ�õ���Ӳ�س�����������Զ����У�</textarea>
    <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
<input type="submit" name="Submit" value="�ύ">
</form>
<?php
echo nl2br($_POST[a])."<br>";
echo nl2br($_POST[b]);
?>

</body>
</html>
