<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ڱ�����Ӹ������õ�Ԫ��</title>
</head>

<body>
<form action="index.php" method="post" name="form1" enctype="multipart/form-data">
  <table width="405" height="24" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
    <tr bgcolor="#993399">
      <td width="103" height="25" align="right" bgcolor="#FFFFFF">������</td>
      <td height="25" align="left" bgcolor="#FFFFCC"><input name="user" type="text" id="user" size="20" maxlength="100"></td>
    </tr>
   <tr bgcolor="#993399">
      <td height="25" align="right" bgcolor="#FFFFFF">�Ա�</td>
      <td height="25" align="left" bgcolor="#FFFFCC"><input name="sex" type="radio" value="��" checked>
        ��
        <input type="radio" name="sex" value="Ů">
      Ů</td>
    </tr>
    <tr bgcolor="#993399">
      <td height="25" align="right" bgcolor="#FFFFFF">��ַ��</td>
      <td height="25" align="left" bgcolor="#FFFFCC"><select name="address" id="address">
        <option value="������" selected>������</option>
        <option value="������">������</option>
        <option value="ͨ����">ͨ����</option>
        <option value="��Դ��">��Դ��</option>
        <option value="��ƽ��">��ƽ��</option>
        <option value="����">����</option>
      </select></td>
    </tr>
    <tr bgcolor="#993399">
      <td height="25" align="right" bgcolor="#FFFFFF">���ã�</td>
      <td height="25" align="left" bgcolor="#FFFFCC"><input name="fond[]" type="checkbox" id="fond[]" value="����">
      ����
        <input name="fond[]" type="checkbox" id="fond[]" value="����">
      ����
      <input name="fond[]" type="checkbox" id="fond[]" value="��Ӿ">
      ��Ӿ
      <input name="fond[]" type="checkbox" id="fond[]" value="����">
      ����</td>
    </tr>
    <tr bgcolor="#993399">
      <td height="25" align="right" bgcolor="#FFFFFF">������Ƭ��      </td>
      <td height="25" align="left" bgcolor="#FFFFCC"><input name="photo" type="file" size="25" maxlength="1000" id="photo"></td>
    </tr>
    <tr bgcolor="#993399">
      <td height="25" align="right" bgcolor="#FFFFFF">�������飺      </td>
      <td height="25" align="left" bgcolor="#FFFFCC"><textarea name="intro" cols="35" rows="4" id="intro"></textarea></td>
    </tr>
    <tr align="center" bgcolor="#CCFF66">
      <td height="25" colspan="2"><input type="submit" name="submit" value="�ύ">
      &nbsp;&nbsp;
      <input type="reset" name="submit2" value="����"></td>
    </tr>
  </table>
</form>
</body>
</html>
