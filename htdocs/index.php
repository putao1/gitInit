
<!DOCTYPE html>
<html>
<head>
	<title>我的网站</title>
</head>
<body>

<form action="index_ok.php" method="post">
<tr bgcolor="#FFCC33">
<td width="103" height="25" align="right">用户名：</td>
<input type="text" name="user">
</tr>
<tr>
<td width="103" height="25" align="right">密码：</td>
<input type="password" name="pwd">
</tr>
<input type="submit" name="submit" value="登录">
</form>

<form method="post" action="index.php" enctype="multipart/form-data">
    <input type="hidden" name="upload" value="upload" />
    <input type="file" name="u_file" />
    <input type="submit" value="上传" />
</form>
<?php
if($_POST['upload']=="upload"){
    $file_path="./files\\";

    $picture_name=$_FILES['u_file']['name'];
    $picture_name=strstr($picture_name,".");
    //echo $picture_name;
    if($picture_name!=".txt"){
    	echo "<script>alert('上传文件格式不正确，请重新上传'); window.location.href='index.php';
    	</script>";
    }
    else if($_FILES['u_file']['tmp_name']){
    	//var_dump($_FILES['u_file']);
       move_uploaded_file($_FILES['u_file']['tmp_name'], $file_path.$_FILES['u_file']['name']);
       //var_dump($file_path.$_FILES['u_file']['name']);
       echo "图片上传成功";
    }
    else
       echo  "图片上传失败";
}

echo substr("She is a welll-read girl",0);
echo "<br>";
echo substr("she is a well-read girl",4,14);
echo "<br>";
echo substr("She is a well-read girl",-4,4);
echo "<br>";
echo substr("She is a well-read girl",0,-4);
echo "<br>";
?>

</body>
</html>

