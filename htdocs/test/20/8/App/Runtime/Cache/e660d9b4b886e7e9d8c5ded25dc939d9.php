<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户信息输出</title>
<link href="__ROOT__/Public/Css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="405" border="1" cellpadding="1" cellspacing="1" bgcolor="#99CC33" bordercolor="#FFFFFF">
  <tr>
    <td colspan="3" bgcolor="#FFFFFF" class="title" align="center">用户信息</td>
  </tr>
  <tr class="title">
    <td bgcolor="#FFFFFF" width="44">ID</td>
    <td bgcolor="#FFFFFF" width="120">名称</td>
    <td bgcolor="#FFFFFF" width="223">地址</td>
  </tr>
  <?php if(is_array($select)): foreach($select as $key=>$user): ?><tr class="content">
    <td bgcolor="#FFFFFF">&nbsp;<?php echo ($user["id"]); ?></td>
    <td bgcolor="#FFFFFF">&nbsp;<?php echo ($user["user"]); ?></td>
    <td bgcolor="#FFFFFF">&nbsp;<?php echo ($user["address"]); ?></td>
  </tr><?php endforeach; endif; ?>
</table>
<table width="405" border="1" cellpadding="1" cellspacing="1" bgcolor="#99CC33" bordercolor="#FFFFFF">
  <tr>
    <td colspan="3" bgcolor="#FFFFFF" class="title" align="center"><form id="form1" name="form1" method="post" action="__URL__/insert">
        <input type="submit" name="button" id="button" value="数据添加" />
    </form></td>
  </tr>
</table>
</body>
</html>