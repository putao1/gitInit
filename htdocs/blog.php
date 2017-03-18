<!DOCTYPE html>
<html>
<head>
	<title>程艳青的blog</title>
	<style type="text/css">
<!--
body,td,th {
  font-size: 12px;
}
body {
  margin-left: 0px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
}
.STYLE1 {
  color: #F9A825;
  font-weight: bold;
}
.STYLE2 {font-weight: bold}
-->
</style>
</head>
<body>
<form name="blog" method="post" action="">
<table align="center" >
	<tr>
		<td background="images/_02.jpg" width=1003 height="80" align="center"></td>
	</tr>
	<tr align="center">
		
		<td ><span class=STYLE2>我的博客内容是：</span> <br><textarea cols="70" rows="10" name="contents"></textarea></td>
	</tr>
	<tr align="center"> 
	<td>
     <input type="submit" name="tijiao" value="提交我的博客" onclick="mycheck();">
     </td>
	</tr>
</table>
</form>
</body>
</html>

<script type="text/javascript">
function mycheck(){
	var elements=blog.contents.value;
	if(elements==""){
		alert("写写博客呗");
	}
	if(length(elements)>=100){
		alert("字数太长啦");
	}
	}
</script>
<?php
if($_POST['contents']!=null){
	echo $_POST['contents'];
}
?>