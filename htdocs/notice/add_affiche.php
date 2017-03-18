<form name="form1" method="post" action="check_add_affiche.php">
<table align="center" width="520" height="212" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr align="center">
	<td align="center">公告主题：</td>
	<td align="left"><input type="text" name="txt_title" id="txt_title" size="40">&nbsp;<font color="red">*</font></td>
</tr>
<tr>
	<td align="center">公告内容:</td>
	<td align="left"><textarea name="txt_content" cols="30" rows="5"></textarea></td>
	</td>
</tr>
<tr>
<td align="right"> <input type="submit" name="Submit" value="保存" class="btn_grey" onclick="return check(form1)">&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td align="left"><input type="reset" name="chongzhi" value="重置"></td>

</tr>
</table>
</form>
<script type="text/javascript">
	function check(form){
		if(form.txt_title.value==""){
			alert("请输入公告标题！");
			form.txt_title.focus();
			return false;
		}
		if(form.txt_content.value==""){
			alert("请输入公告内容");
			form.txt_content.focus();
			return false; //return的作用是什么
		}
		form.submit();//如果各个控件不为空，提交表单信息到数据处理页面
	}
</script>