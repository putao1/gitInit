<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>����ͨ��Webҳ�в����</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style></head>
<body>
<form action="index.php" method="post" name="form1" enctype="multipart/form-data">
  <table width="405" height="24" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
    <tr bgcolor="#FFCC33">
      <td width="103" height="25" align="right">������</td>
      <td width="144" height="25" align="left"><input name="user" type="text" id="user" size="20" maxlength="100"></td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td height="25" align="right">�Ա�</td>
      <td height="25" colspan="2" align="left"><input name="sex" type="radio" value="��" checked>
        ��
        <input type="radio" name="sex" value="Ů">
        Ů</td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td width="103" height="25" align="right">���룺</td>
      <td width="289" height="25" colspan="2" align="left"><input name="pwd" type="password" id="pwd" size="20" maxlength="100"></td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td height="25" align="right">ѧ����</td>
      <td height="25" colspan="2" align="left"><select name="select">
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
      <td height="25" colspan="2" align="left"><input name="fond[]" type="checkbox" id="fond[]" value="����">
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
      <td height="25" colspan="2" align="left"><input name="photo" type="file" size="20" maxlength="1000" id="photo"></td>
    </tr>
    <tr bgcolor="#FFCC33">
      <td height="25" align="right">���˼�飺 </td>
      <td height="25" colspan="2" align="left"><textarea name="intro" cols="28" rows="3" id="intro"></textarea></td>
    </tr>
    <tr align="center" bgcolor="#FFCC33">
      <td height="25" colspan="3"><input type="submit" name="submit" value="�ύ">
        &nbsp;&nbsp;
        <input type="reset" name="submit2" value="����"></td>
    </tr>
  </table>
</form>
</body>
</html>
