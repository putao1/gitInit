<table align='center' valign='top' width="520" height="450">
		<tr height=50>
			
		</tr>
		<tr>
			<td width=520 height=395 background="images/login.jpg">
				<form name='register' method="post" action="register_ok.php" >
				<table>
				<tr>
					<td height='100' align="middle">&nbsp;</td>
					
				</tr>

				<tr width=70% align="right">
				<td width=32%></td>
					<td algin='right' width=15%>用户名：</td>
					<td align="left" width=56%><input type="text" name="username"><font color="red">*</font></td>
				</tr>
				<br>
                <tr width=70% align="right">
                    <td width=32%></td>
					<td algin='right' width=15%>密 码：</td>
					<td align="left" width=56%><input type="password" name="userpwd"><font color="red">*</font></td>
				</tr>
				<tr width=70% align="right">
                    <td width=32%></td>
					<td algin='right' width=15%>邮 箱：</td>
					<td align="left" width=56%><input type="text" name="email"></td>
				</tr>
				<tr height=60% valign="bottom" align='right' colspan='3'>
					<td width=33%></td>

					<td valign="bottom" align="right"><input type="submit" name="Submit" value="注册" onclick="return check(register);"></td>
					<td width=60% valign="bottom" align="center"><input type="reset" name="Submit2" value="重置"></td>
				</tr>
				</table>
				</form>
			</td>
		</tr>
	</table>
	<script type="text/javascript">
		function check(form){
              if(form.username.value==""){
              	alert('用户名不能为空！');form.username.focus();return false;
              }
              if(form.pwd.value==""){
              	alert('密码不能为空！');form.pwd.focus();return false;
              }
              form.submit();
		}
	</script>
