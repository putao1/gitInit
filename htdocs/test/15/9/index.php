<script language="javascript">
function chk(form){
	if(form.name.value == '' || form.pwd.value == ''){
		alert('��������Ϣ');
		return false;
	}
}
</script>
<table border="1" cellpadding="0" cellspacing="0" align="center">
<form id="lg" name="lg" method="post" action="index_chk.php" onSubmit="return chk(lg)">
  <tr>
  	<td colspan="2" height="25" align="center" valign="middle">�û���¼</td>
  </tr>
  <tr>
    <td width="75" height="25" align="right" valign="middle">�û�����</td>
    <td height="25" align="left" valign="middle"><input name="name" type="text" size="20" maxlength="20"></td>
  </tr>
  <tr>
    <td height="25" align="right" valign="middle">���룺</td>
    <td height="25" align="left" valign="middle"><input name="pwd" type="password" size="20" maxlength="20"></td>
  </tr>
  <tr>
		<td height="25" align="right">��¼��ʽ��</td>
		<td align="left">
			<select name="method">
				<option value="crypt">crypt����</option>
				<option value="md5">md5����</option>
			</select>
		</td>
	</tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle"><input type="submit" value="��½">&nbsp;<a href="reg.php">ע��</a></td>
  </tr>
</form>
</table>
