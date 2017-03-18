<!DOCTYPE html>
<html>
<head>
	<title>多文件上传</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<table align="center">
<tr><td align="center">文件路径（5个文件以内任意上传）</td></tr>
<tr>
<td align="right">内容1：</td>
<td><input type="file" size="30" name="picture[]"></td></tr>
<tr>
<td align="right">内容2：</td>
<td><input type="file" size="30" name="picture[]"></td></tr>
<tr>
<td align="right">内容3：</td>
<td><input type="file" size="30" name="picture[]"></td></tr>
<tr>
<td align="right">内容4：</td>
<td><input type="file" size="30" name="picture[]"></td></tr>
<tr>
<td align="right">内容5：</td>
<td><input type="file" size="30" name="picture[]"></td></tr>
<tr>

<td align="right"><input type="submit" name='upload' size="40" value="执行上传操作"></td></tr>
</table>
</form>
<?php
if($_POST['upload']!=null){
if(!is_dir("./multiFile")){
	mkdir("./multiFile");
}
var_dump($_FILES['picture']['name']);
array_push($_FILES["picture"]["name"], "");
$array=array_unique($_FILES['picture']['name']);
array_pop($array);

for($i=0;$i<count($array);$i++){
$path="multiFile/".$_FILES['picture']['name'][$i];//定义上传文件的存储路径
if(move_uploaded_file($_FILES['picture']['tmp_name'][$i], $path)){
	$result=true;
}else{
	$result=false;
}
}
if($result==true){
	echo "文件上传成功，请稍等...";
	//echo "<meta http-equiv=\"refresh\" content=\"3;url=multiFile.php\">";
}else{
	echo "文件上传失败，请稍等...";
	//echo "<meta http-equiv=\"refresh\" content=\"3;url=multiFile.php\">";
}
}
?>

</body>
</html>