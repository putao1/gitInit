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
         if($_POST['tijiao']==true){
         	$str=$_POST['answer'];
         	$arr=explode("*", $str);
         	$num=count($arr);
         	for($i=0;$i<$num;$i++){

         
		?>
        <input type="checkbox" name="<?php echo $i;?>" value="<?php echo $arr[$i];?>"><?php echo $arr[$i];?>
    <?php
	       }
         }
    ?>
        </td>

		</tr>
	</table>
</form>
</body>
</html>