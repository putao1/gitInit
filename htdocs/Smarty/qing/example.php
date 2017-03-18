<?php

//引入smarty核心类文件
require_once("../libs/Smarty.class.php");
//实例化smarty对象
$smarty = new Smarty();
//设置模板的标签标识
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";
//设置变量和值
$smarty->assign('helloworl',10000);
//引用模板文件
$smarty->display('example.tpl');