<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��ȡ�����б���ֵ</title>
<style type="text/css">
<!--
.style2 {font-size: 13px}
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 5px;
	margin-top: 5px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>
<form name="form1" method="post" action="">
  <table width="280" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="80" height="25" align="center"><span class="style2">�������:</span></td>
      <td width="194">
		<select name="select" size="1">
			<option value="��˾��չ" selected>��˾��չ</option>
			<option value="�����ƶ�">�����ƶ�</option>
			<option value="���ڷ���">���ڷ���</option>
			<option value="Ա��н��">Ա��н��</option>
        </select>&nbsp;&nbsp;&nbsp;
      <input type="submit" name="submit" value="�ύ"></td>
    </tr>
  </table>
</form>
<?php
if($_POST[submit]=="�ύ"){
   echo "��ѡ����������Ϊ��".$_POST[select];
}
?>
</body>
</html>
