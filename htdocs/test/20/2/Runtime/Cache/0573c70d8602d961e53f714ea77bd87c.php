<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ThinkPHP开发流程</title>
</head>

<body>
<!--循环输出查询结果数据集--> 

<?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): ++$i;$mod = ($i % 2 )?>ID：<?php echo ($user["id"]); ?><br/>

用户名：<?php echo ($user["user"]); ?><br/>

地址：<?php echo ($user["address"]); ?><hr><?php endforeach; endif; else: echo "" ;endif; ?>


</body>
</html>