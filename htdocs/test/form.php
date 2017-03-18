<!DOCTYPE html>
<html>
<head>
	<title>我的自我介绍</title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
	<table align="center" border="0" bgcolor="FFdddd">
		<tr>
			<td>姓名:</td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
			<td>性别:</td>
			<td>
			<input type="radio" name="sex" value="男">男
            <input type="radio" name="sex" value="女">女
			</td>
		</tr>
		<tr>
			<td>密码:</td>
			<td><input type="password" name="pwd"></td>
		</tr>
		<tr>
			<td>学历:</td>
			<td>
			<select name="learn">
				<option value="博士生">博士生</option>
				<option value="硕士生">硕士生</option>
				<option value="本科生">本科生</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>爱好:</td>
			<td>
			<input type="checkbox" name="hobby[]" value="电脑">电脑
            <input type="checkbox" name="hobby[]" value="音乐">音乐
            <input type="checkbox" name="hobby[]" value="旅游">旅游
            <input type="checkbox" name="hobby[]" value="其他">其他
			</td>
		</tr>
		<tr>
			<td>个人写真:</td>
			<td><input type="file" name="profile" ></td>
		</tr>
		<tr>
			<td>个人简介:</td>
			<td><textarea name="selfIntro"></textarea>
			</td>
		</tr>
		<tr>
		<td align="right">
			&nbsp;&nbsp;<input type="submit" name="tijiao" value="提交"> &nbsp;&nbsp;
			<input type="reset" name="chongzhi" value="重置">
		</td>
		</tr>
	</table>
</form>
<?php
if($_POST['tijiao']=='提交'){
	echo "姓名：".$_POST['user']."<br>性别：".$_POST['sex']."<br>密码：".$_POST['pwd']."<br>学历：".$_POST['learn']."<br>我的爱好是：";
	//print_r($_POST[hobby]);
	for($i=0;$i<count($_POST['hobby']);$i++){
		echo $_POST['hobby'][$i]." ";
	}
	//var_dump($_FILES['profile']);
	$path='./upfiles/'.$_FILES['profile']['name'];//指定上传的路径和文件名
	move_uploaded_file($_FILES['profile']['tmp_name'], $path);//上传文件
    echo "<br>"."个人写真：".$path."<br>";
    echo "<br>".$_POST['profile']; 

	
}

?>
<td>
<?php
$fopen=fopen($path,"rb");//打开文件
while(!feof($fopen)){
	echo fgets($fopen);
}
fclose($fopen);
echo "<br>".$_POST['selfIntro'];

?> 
</td>
</body>
</html>