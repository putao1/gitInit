<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Ӧ��JavaScript�ű���֤��Ԫ���Ƿ�Ϊ��</title>
</head>
<script language="javascript">
function mycheck(){
if(myform.user.value=="")
{alert("�û����Ʋ���Ϊ�գ���");myform.user.focus();return false;}
if(myform.pwd.value=="")
{alert("�û����벻��Ϊ�գ���");myform.pwd.focus();return false;}
}
</script>
<body>
<form name="myform" method="post" action="">
  <table width="532" height="183" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCFF66" background="images/bg.jpg">
    <tr>
      <td height="71" colspan="2" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td width="249" height="30" align="center">&nbsp;</td>
      <td width="281" align="left">
		�û�����<input name="user" type="text" id="user" size="20"> <br><br>
		��&nbsp;&nbsp;�룺<input name="pwd" type="password" id="pwd" size="20">
	  </td>
    </tr>
    <tr>
      <td height="43" align="center">&nbsp;</td>
      <td height="43" align="center">
		<input type="submit" name="submit" onClick="return mycheck();" value="��¼">&nbsp;
		<input type="reset" name="Submit2" value="����">
	  </td>
    </tr>
  </table>
</form>
</body>
</html>
