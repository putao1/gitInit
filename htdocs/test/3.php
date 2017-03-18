<?php
echo "hello"."<p>";
print("hello");
printf("%s","hello");
print_r("hello");
define('DEFAULT_NUM', 90);
echo "<br>".DEFAULT_NUM;

echo "当前用户的ip地址：".$_SERVER['REMOTE_ADDR'];
echo "当前用户的主机名：".$_SERVER['REMOTE_HOST'];
echo "当前用户的端口：".$_SERVER['REMOTE_PORT'];
echo "服务器使用的端口号".$_SERVER['SERVER_PORT'];
echo "执行脚本的绝对路径名".$_SERVER['SCRIPT_FILENAME'].$_SERVER['SERVER_NAME'].$_SERVER['SERVER_ADDR'].$_SERVER['REQUEST_METHOD'];


?>