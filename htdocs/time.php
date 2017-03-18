<?php
date_default_timezone_set("Asia/Hong_kong");
$nextweek=time()+(7*24*60*60);
echo "next week:".$nextweek."<br>";
echo "next week:".date("Y-m-d H:i:s",$nextweek);
echo "<br>Now:".date("Y-m-d H:i:s")."<br>";
echo "<br>Now:".time()."<br>";
echo "<p>DATE_ATOM=".date(DATE_ATOM)."<p>";
echo "DATE_COOKIE=".date(DATE_COOKIE);
$arr=getdate();
echo "<p>获取日期信息";
print_r($arr);

echo "<br>检查2017.2.29是否合法：";
var_dump(checkdate(2, 29, 2017));
echo "<br>检查2017.2.28是否合法：";
var_dump(checkdate(2, 28, 2017));
echo "<br>".date("l Y-m-d H:i:s T");
echo "<br>".date("\T\o\d\a\y \i\s \\t\h\\e jS \d\a\y \o\\f \m\o\\n\\t\h");

setlocale(LC_ALL,"en_US");
echo "美国格式：".strftime("Today is %A");
setlocale(LC_ALL, "chs");
echo "中文简体格式".strftime("今天是%A");
setlocale(LC_ALL,"cht");
echo "繁体中文格式:".strftime("今天是%A");

