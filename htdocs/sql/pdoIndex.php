<style type="text/css">
	.style{
		margin-top: 30px;
	}
</style>
<form method="post" action="pdoInsert.php">
	<table align="center" class='style'>
		<tr>
			<td>类 型：</td>
			<td><input type="text" name="pdo"></td>
		</tr>
		<tr>
			<td>数据库：</td>
			<td><input type="text" name="database"></td>
		</tr>
		<tr>
			<td>创建时间：</td>
			<td><input type="text" name="createtime" value="<?php date_default_timezone_set('Asia/Hong_Kong'); echo date('Y-m-d H:i:s'); ?>"></td>
		</tr>
		<tr >
		<td colspan="2" align="center">
		<input type="submit" name="Submit" value="提交">
		<input type="reset" name="Reset" value="重置">
		</td>
		</tr>
	</table>
</form>