<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��list()������each()�������洢�������е�ͼ�����ƺ����߻�ȡ����</title>
</head>

<body>
<form name="form1" method="post">
     <table width="587" border="1" cellpadding="1" cellspacing="1" bordercolor="#66CC33" bgcolor="#FFFFFF">
       <tr>
         <td width="95" height="30" align="right" bgcolor="#CCFF33">ͼ�����ƣ�</td>
         <td width="479" height="30" bgcolor="#CCFF33">&nbsp;           <input name="ͼ������" type="text" class="inputcss" id="ͼ������" size="24">
         ���ߣ�           <input name="����" type="text" class="inputcss" id="����" size="16">
         &nbsp;
         <input name="submit" type="submit"  value="�� ѯ"></td>
       </tr>
  </table>
</form>
<?php
//����û���¼��Ϣ
while(list($name,$value)=each($_POST)){
	if($name!="submit"){
  	  echo "$name=$value<br>";
	}
}
?>
</body>
</html>
