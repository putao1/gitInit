<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�����û���¼</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<body>
<script language="javascript">
	function check(form){
		if(form.user.value==""){
			alert("�������û���");form.user.focus();return false;		
		}
		if(form.pwd.value==""){
			alert("����������");form.pwd.focus();return false;
		}
		form.submit();
	}
</script>
<form name="form1" method="post" action="default.php">
  <table width="521" height="394" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td valign="top" background="images/login.jpg"><table width="521" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="262" height="218">&nbsp;</td>
            <td width="259">&nbsp;</td>
          </tr>
          <tr>
            <td height="24" align="right">�û�����</td>
            <td height="24" align="left"><input name="user" type="text" id="user" size="20"></td>
          </tr>
          <tr>
            <td height="24" align="right">��&nbsp;&nbsp;�룺</td>
            <td height="24" align="left"><input name="pwd" type="password" id="pwd" size="20"></td>
          </tr>
          <tr align="center">
            <td height="24" colspan="2"><input type="submit" name="Submit" value="�ύ" onClick="return check(form);">
            &nbsp;&nbsp;
            <input type="reset" name="Submit2" value="����"></td>
          </tr>
          <tr>
            <td height="76" align="right"><span class="style1">�����û���tsoft<br>
  ��&nbsp;&nbsp;&nbsp;&nbsp;�룺111&nbsp;&nbsp;</span></td>
            <td><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��ͨ�û���zts<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;�룺000</span></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
