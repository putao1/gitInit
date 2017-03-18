<form method="post" enctype="multipart/form-data">
<table>
	<tr>
	<td>简历：</td>
	<td><input type="file" name="file[]" value="上传简历"></td>
	</tr>

	<tr>
	<td>获奖：</td>
	<td><input type="file" name="file[]" value="上传获奖信息"></td>
	</tr>

	<tr>
	<td>照片：</td>
	<td><input type="file" name="file[]" value="上传美照"></td>
	</tr>

	<tr>
	<td><input type="submit" name="Submit" value="上传您的所有信息"></td>
	<td><input type="reset" name="Reset" value="重置"></td>
	</tr>
</table>
</form>

<?php
$tmpName=$_FILES['file']['tmp_name'];

foreach ($tmpName as $key=>$value) {
	move_uploaded_file($value, 'upload/'.$_FILES['file']['name'][$key]) or die($_FILES['file']['name'][$key].'上传失败');
}
echo '上传成功';
var_dump($_FILES['file']);
?>