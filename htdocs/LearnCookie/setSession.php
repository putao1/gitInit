<?php
date_default_timezone_set('Asia/Hong_Kong');
//echo 'hi';
session_start();
$_SESSION['admin']=date('Y-m-d H:i:s');//声明一个名为admin的变量
$_SESSION['name']='Qinger';
var_dump($_SESSION);
if(!empty($_SESSION['admin'])){
	$myValue=$_SESSION['admin'];
}
echo '<br>'.$myValue;
unset($_SESSION['admin']);
@var_dump($_SESSION['admin']);
var_dump($_SESSION['name']);
$_SESSION=array();
var_dump($_SESSION);
session_destroy();
?>