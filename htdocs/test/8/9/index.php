<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��ȡ�˵��б���ֵ</title>
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
  <table width="423" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="231" height="30" align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;��ѡ����ϲ����PHP��ͼ��</td>
      <td width="192" align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle"><select name="select[]" size="5" multiple>
          <option value="PHP���ݿ�ϵͳ������ȫ�ֲ�">PHP���ݿ�ϵͳ������ȫ�ֲ�</option>
          <option value="PHP��̱���">PHP��̱���</option>
          <option value="PHP���򿪷���������">PHP���򿪷���������</option>
          <option value="PHP 5�����ŵ���ͨ">PHP 5�����ŵ���ͨ</option>
          <option value="PHP�����ο���ȫ">PHP�����ο���ȫ</option>
        </select></td>
      <td align="left" valign="middle"><input type="submit" name="Submit" value="�ύ"></td>
    </tr>
    <tr>
      <td height="30" colspan="2" align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;<?php
if($_POST[select] != "")				//��Ӧ���¼������ض�ѡ�б���ֵ
	echo "���:";
	for($i = 0; $i < count($_POST[select]); $i++)				
		echo $_POST[select][$i]."&nbsp;&nbsp";
?></td>
    </tr>
  </table>
</form>
</body>
</html>
