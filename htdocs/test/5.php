<!DOCTYPE html>
<html>
<head>
	<title>检查用户的身份证长度</title>
</head>
<body>
<form action="../index_ok.php" method="post" enctype="multipart/form-data">
"请输入您的身份证信息:" <input type="text" name="IDcard">
<input type="submit" value="提交">
</form>
<?php
//var_dump(strlen($_POST['IDcard']));
//if($_POST['IDcard']=="IDcard"){
if(strlen($_POST['IDcard'])!=18){
	//echo "<script>alert('您输入的身份证长度不对，请重新输入'); window.location.href='5.php';</script>";
}
else
   echo "<script>alert('恭喜您，输入成功'); window.location.href='5.php';</script>";
//}
?>
</body>
</html>

