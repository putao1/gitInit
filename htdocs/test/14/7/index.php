<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>伪变量$this</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style></head>
<body>
<?php
	class example{
		function exam(){
			if(isset($this)){
				echo '$this的值为：'.get_class($this);
			}else{
				echo '$this未定义';
			}
		}
	}
	$class_name = new example();
	$class_name->exam();
?>
</body>
</html>
