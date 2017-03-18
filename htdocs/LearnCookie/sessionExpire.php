<?php
/*
$time=20;
session_set_cookie_params($time);  //浏览器没有禁止cookie的情况
session_start();
$_SESSION['username']='YimmyCheng@163.com';
var_dump($_SESSION);
$i=0;
while(!empty($_SESSION['username'])){
//echo $i++.'<br>';
}
var_dump($_SESSION);
echo 'session变量过期啦';
*/

session_start();
date_default_timezone_set('Asia/Hong_Kong');
setcookie(session_name(),session_id(),time()+60,'/LearnCookie');
$_SESSION['username']='QingQing';

//var_dump($_SESSION);
//var_dump($_COOKIE);
var_dump(session_name());
var_dump(session_id());


?>

<a href="sessionId.php?<?php echo session_name().'=';?><?php  echo session_id();?>">sessionId传递</a>

