<?php
$preg='/\d{3,4}-?\d{7,8}/';//国内固定电话格式
$arr = array('01062281110','01011234567','787878');
$preg_arr=preg_grep($preg, $arr);
echo "符合条件的电话:";
var_dump($preg_arr);
//exit("电话");

//$preg="/\w+([-+.']\w+)*@\w+([-+.']\w+)*\.\w+([-+']\w+)*/";
$preg="/(\w+)([-+.']\w+)*@\1\2*\.\1\2*/";
$arr = array('YimmyCheng@163.com','1252700451@qq.com','Yimmy1@163.com','123','Yim+----qing@163.com','yim@16-3.com' );
echo "<br>符合条件的邮箱：";
var_dump(preg_grep($preg,$arr));

$str='This is ,an example';
$preg='/\b\w{2}\b/';
$num1=preg_match($preg,$str,$str1);
echo "<br>".$num1."<br>";
var_dump($str1);

echo "<br>"."preg_match_all匹配的结果:";
$num2=preg_match_all($preg,$str,$str2);
echo $num2."<br>";
var_dump($str2);

echo "<br>.split分割后的结果";
$ereg='is';
$str='This is, a register, book';
$arr_str=split($ereg,$str);
var_dump($arr_str);
echo "<br>"."preg_split分割后的结果";
$del="/is/";
var_dump(preg_split($del, $str));

$string='[b]粗体字[/b]';
//$pattern='/\[b\](.*)\[\/b\]/i';
$result=preg_replace('/\[b\](.*)\[\/b\]/i', '<b>$1</b>', $string);
echo $result;

echo "<font color='green'>字体颜色</font>";
?>