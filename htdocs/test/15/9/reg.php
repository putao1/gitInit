<script language="javascript">
	function rg(form){
		if(form.name.value == '' || form.pwd.value == ''){
			alert('����д��Ϣ');
			return false;
		}
		if(form.pwd.value != form.pwd2.value){
			alert("�������벻ͬ");
			return false;
		}
	}
</script>
<table border="1" cellpadding="0" cellspacing="0" align="center">
<form id="reg" name="reg" method="post" action="reg_chk.php" onSubmit="return rg(reg)">
	<tr>
		<td colspan="2" align="center" valign="middle" height="25">�û�ע��</td>
	</tr>
	<tr>
		<td width="75" height="25" align="right">�û�����</td>
		<td align="left"><input id="name" name="name" type="text" size="20" /></td>
	</tr>
	<tr>
		<td height="25" align="right">���룺</td>
		<td align="left"><input id="pwd" name="pwd" type="password" size="20" /></td>
	</tr>
	<tr>
		<td height="25" align="right">ȷ�����룺</td>
		<td align="left"><input id="pwd2" name="pwd2" type="password" size="20" /></td>
	</tr>
	<tr>
		<td height="25" align="right">���ܷ�ʽ��</td>
		<td align="left">
			<select name="method">
				<option value="crypt">crypt����</option>
				<option value="md5">md5����</option>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2" height="25" align="center">
			<input type="submit" value="ע��" />&nbsp;
			<a href="index.php">��¼</a>
		</td>
	</tr>
</form>
</table>