<!DOCTYPE html>
<html>
<head>
	<title>检查check</title>
</head>
<script type="text/javascript">
//document.write("elements");
//document.write(form1.getElementsByTagName('input'));
var elements=form1.getElementsByTagName('input');
//document.write(elements.length);
//document.write(elements.length);
	function checkAll(form1,status){
		
		var elements=form1.getElementsByTagName('input');//获取input标签
		//document.write(elements.length);
		for(var i=0;i<elements.length;i++){
			if(elements[i].type=='checkbox'){
				if(elements[i].checked==false){
					elements[i].checked=true;
				}
			}
		}
		//document.write(elements);

	}

	function switchAll(form1,status){
		var elements=form1.getElementsByTagName('input');//获取input标签
		for(var i=0;i<elements.length;i++){
			if(elements[i].type=='checkbox'){
				if(elements[i].checked==true){
					elements[i].checked=false;
				}
				else if(elements[i].checked==false){
					elements[i].checked=true;
				}
			}
		}
	}

	function uncheckAll(form1,status){
		var elements=form1.getElementsByTagName('input');//获取input标签
		
		for(var i=0;i<elements.length;i++){
			if(elements[i].type=='checkbox'){
				if(elements[i].checked==true){
					elements[i].checked=false;
				}
			}
		}
	}

</script>
<body>
<form method="post" name="form1" id="form1" action="">
<table border="1" align="center">
	<tr>
		<td>说明：</td>
		<td width="387"><textarea name="readme" cols="50" rows="10" id="readme"></textarea></td>
		<td>
		<a href="#"  onClick="javascript:document.getElementById('readme').value=";return false;">
		<input type="submit" name="tijiao" value="删除">
        </a>
		</td>
	</tr>
	<tr>
	    <td rowspan="7" align="right">操作：</td>
	</tr>
	<tr><td><input type="checkbox" name="book1" value="PHP">PHP编程词典</td></tr>
	<tr><td><input type="checkbox" name="book2" value="PHP">PHP入门到精通</td></tr> 
    <tr><td><input type="checkbox" name="book3" value="PHP">Python高级词典</td></tr> 
    <tr><td><input type="checkbox" name="book4" value="PHP">C语言</td></tr>	
    <tr>
                  <td height="30" colspan="4" align="left" bgcolor="#FFFFFF"><input name="PHP" type="checkbox" id="PHP" value="PHP" />
                    VC编程词典钻石版</td>
                </tr>
                <tr>
                  <td height="30" colspan="4" align="left" bgcolor="#FFFFFF"><input name="PHP4" type="checkbox" id="PHP4" value="PHP" />
                    PHP编程词典体验版</td>
                </tr>
	<tr>
	
      <td colspan="5" align="center" bgcolor="#FFFFFF">

      <img src="images/_01.jpg" onclick="checkAll(form1,status)" width="60" height="25" />&nbsp;&nbsp;<img src="images/_08.jpg" onclick="switchAll(form1,status)"  width="60" height="25" />&nbsp;&nbsp;<img src="images/_11.jpg" width="60" height="25" onclick="uncheckAll(form1,status)" /> &nbsp;&nbsp;</td>

	
	</tr>
</table>
</form>

</body>
</html>