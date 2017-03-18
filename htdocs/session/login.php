<table align='center' valign='top' width="520" height="450">
		<tr height=50>
			
		</tr>
		<tr>
			<td width=520 height=395 background="images/login.jpg">
				<form name='login' method="post" action="index_ok.php" >
				<table>
				<tr>
					<td height='100' align="middle">&nbsp;</td>
					
				</tr>

				<tr width=70% align="right">
				<td width=32%></td>
					<td algin='right' width=15%>用户名：</td>
					<td align="left" width=56%><input type="text" name="username"></td>
				</tr>
				<br>
                <tr width=70% align="right">
                    <td width=32%></td>
					<td algin='right' width=15%>密 码：</td>
					<td align="left" width=56%><input type="password" name="pwd"></td>
				</tr>
				<tr height=60% valign="bottom" width=70%>
					<td width=33%></td>

					<td valign="bottom" align="right"><input type="submit" name="Submit" value="登录" onclick="return check(login);"></td>
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
