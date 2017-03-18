<!DOCTYPE html>
<html>
<head>
	<title>"textarea软回车和硬回车"</title>
</head>
<body>
<form action="textarea.php" method="post">
<textarea cols=20 rows=3 wrap="soft" name="a">我使用的是软换行，换行符不传递 </textarea>
<textarea cols=20 rows=3 wrap="hard" name="b">我使用的是硬换行，换行符传递给你啦</textarea>
<input type="submit" value="提交">
<?php
echo nl2br($_POST[a])."<br>";
echo nl2br($_POST[b])."<br>";
?>
</form>
</body>
</html>