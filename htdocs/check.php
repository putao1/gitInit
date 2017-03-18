<form method="post" name="form1" action="">
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
	    <td rowspan="5" align="right">操作：</td>
	</tr>
	<tr><td><input type="checkbox" name="book1" >PHP编程词典</td></tr>
	<tr><td><input type="checkbox" name="book2" >PHP入门到精通</td></tr> 
    <tr><td><input type="checkbox" name="book3" >Python高级词典</td></tr> 
    <tr><td><input type="checkbox" name="book4" >C语言</td></tr>	
	<tr>
	<td colspan="5" align="center" bgcolor="#FFFFFF">
		<input type="submit" name="checkAll" value="全选" onclick="checkAll(form1,status)">
		<img src="images/_01.jpg" onclick="checkAll(form1,status)" width="60" height="25" />
		<input type="submit" name="checkAll" value="反选" onsubmit="switchAll(form1,status)">
		<input type="submit" name="checkAll" value="不选" onsubmit="uncheckAll(form1,status)">
	</td>
	</tr>
</table>
</form>
<script type="text/javascript">
//document.write("elements");
//document.write(form1.getElementsByTagName('input'));
var elements=form1.getElementsByTagName('input');
//document.write(elements.length);
	function checkAll(form1,status){
		//document.write("elements");
		var elements=form1.getElementsByTagName('input');//获取input标签
		
		for(var i=0;i<elements.length;i++){
			if(elements[i].type=='checkbox'){
				if(elements[i].checked==false){
					elements[i].checked=true;
				}
			}
		}
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