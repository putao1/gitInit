<form enctype="multipart/form-data" method="post">
<div align="center" border="1">
	请选择上传文件：
	<input type="file" name="uploadMe">
	<input type="text" name="user">
	<input type="submit" name="Submit" value="上传">
</div>	
</form>

<?php
session_start();
@$_SESSION['user']=$_POST['user'];//通过post的方式获取 变量后给session，session可以跨页面传递
$user=$_SESSION['user'];
//var_dump($user);
//die('hi');
//var_dump($_FILES['uploadMe']);//在form表单中上传后，才会有$_FILES变量
if(!empty($_FILES)){
	foreach ($_FILES['uploadMe'] as $name => $value) {
		echo $name."=".$value."<br>";
	}
}
if($_FILES['uploadMe']['name']){
	$name=$_FILES['uploadMe']['name'];
	$pic=strstr($name, '.');
	$preg='/jpg|bmp|jpeg|png|JPG|BMP|JPEG|PNG/';
	$preg='/jpg|bmp|jpeg|png|JPG|BMP|JPEG|PNG$/';
	if($_FILES['uploadMe']['size']>1024*1024 || $_FILES['uploadMe']['size']<=0){
           echo "文件超过1M或者为空文件，无法上传";
           return false;
	}elseif (preg_match($preg, $name)==0) {
		echo '格式不对，请重新上传(新的正则)';
		return false;
	}else{
		if(!is_dir('upload')){//没有该目录时，创建一个目录
			mkdir('upload');
	     }	    
		if(move_uploaded_file($_FILES['uploadMe']['tmp_name'], "upload/".$name)){
			echo "文件上传成功";
		}else{
			echo "上传失败，请重新上传";
		}
	}	
}else{
	echo "文件不存在！无法上传";
}
?>