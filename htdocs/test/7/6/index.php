<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>foreach()������������</title>
</head>
<body>
<?php
 $url = array('��̴ʵ���'=>'www.mrbccd.com',
              '���������'=>'www.bcty365.com',
              '�����Դ��'=>'www.bc110.com',
              );
foreach (  $url as $link ) {
  echo $link.'<br><br>';
} 
?>
</body>
</html>
