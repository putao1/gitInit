<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>PHP��Web�����ۺ�Ӧ��</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 5px;
	margin-top: 5px;
	margin-right: 5px;
	margin-bottom: 5px;
}
-->
</style></head>
<body>
<form action="index.php" method="post" name="form1" enctype="multipart/form-data">
  <table width="405" height="24" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
    <tr bgcolor="#FFCC33">
      <td width="103" height="25" align="right">������</td>
      <td height="25" align="left"><input name="user" type="text" id="user" size="20" maxlength="100"></td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td height="25" align="right">�Ա�</td>
      <td height="25" align="left"><input name="sex" type="radio" value="��" checked>
        ��
        <input type="radio" name="sex" value="Ů">
        Ů</td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td width="103" height="25" align="right">���룺</td>
      <td width="289" height="25" align="left"><input name="pwd" type="password" id="pwd" size="20" maxlength="100"></td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td height="25" align="right">ѧ����</td>
      <td height="25" align="left"><select name="select">
          <option value="����">����</option>
          <option value="����">����</option>
          <option value="ר��">ר��</option>
          <option value="����" selected>����</option>
          <option value="�о���">�о���</option>
          <option value="��ʿ��">��ʿ��</option>
          <option value="˶ʿ��">˶ʿ��</option>
        </select></td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td height="25" align="right">���ã�</td>
      <td height="25" align="left"><input name="fond[]" type="checkbox" id="fond[]" value="����">
        ����
        <input name="fond[]" type="checkbox" id="fond[]" value="����">
        ����
        <input name="fond[]" type="checkbox" id="fond[]" value="����">
        ����
        <input name="fond[]" type="checkbox" id="fond[]" value="����">
        ����</td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td height="25" align="right">����д�棺 </td>
      <td height="25" align="left"><input name="photo" type="file" size="20" maxlength="1000" id="photo"></td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td height="25" align="right">���˼�飺 </td>
      <td height="25" align="left"><textarea name="intro" cols="28" rows="4" id="intro"></textarea></td>
    </tr>
    <tr align="center" bgcolor="#FFCC33">
      <td height="25" colspan="2"><input type="submit" name="submit" value="�ύ">
        &nbsp;&nbsp;
        <input type="reset" name="submit2" value="����"></td>
    </tr>
  </table>
</form>
<?php
if($_POST[submit]!=""){
	echo "���ĸ��˼��������ǣ�";
	echo " ����:".$_POST[user];
	echo " �Ա�:".$_POST[sex];
	echo " ����:".$_POST[pwd];
	echo " ѧ��:".$_POST[select];
	echo " ���ã�";
	for($i=0;$i<count($_POST[fond]);$i++)
		echo $_POST[fond][$i]."&nbsp;&nbsp;";
		$path = './upfiles/'. $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],$path);
		echo " ����д�棺".$path;
		echo " ���˼�飺".$_POST[intro];
	}
?>
</body>
</html>
