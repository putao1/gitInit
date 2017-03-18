<!DOCTYPE html>
<html>
<head>
	<title>vote</title>
</head>
<body>
<form method="post" action="">
	<table border="1" bgcolor="0fec32">
		<tr>
			<td>添加投票选项</td>
			<td><textarea name="answer"></textarea>注意：每个选项间用*分隔
			</td>
			<td><input type="submit" name="tijiao"></td>
		</tr>
	</table>
	<table border="1" bgcolor="0fec32">
		<tr>
		<td>投票选项：</td>
		<td>
		<?php
		if($_POST['tijiao']!=null){
		$content=$_POST['answer'];
		$data=explode("*",$content);
		while(list($name,$value)=each($data)){
		   echo "<input type='checkbox' name=$name value=$value>";
		   echo $value;
		}
		}
        ?>
        </td>
		</tr>
	</table>
</form>
</body>
</html>