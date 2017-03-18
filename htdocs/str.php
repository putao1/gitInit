<?php
//substr_count()检索子串出现的次数
$str="test hello worlld";
echo '"'.$str."\"中'test'出现的次数是:".substr_count($str,'test')."<br>";

$str2="计算机";
$str1="**";
$str="某某公司是一家很棒的计算机公司";

//echo str_ireplace($str2,$str1,$str);
echo str_ireplace($str2,"<font color='00FF00'>".$str2."</font>",$str);
echo "<br>";
//$substr="用今日的辛勤劳动，换明日的双倍回报！";
//substr_replace字符串替换函数
$substr="hello world";
$replace="Qing";
echo $substr;
echo substr_replace($substr,"<font color='#FF0000'>".$replace."</font>",6,4)."<p>";

//格式化字符串 number_format
$number=1868.96;
echo number_format($number)."<p>";

//字符串分割函数,ecplode 返回值是数组
$str="Monday||Tuesday||Wednesday||Thursday";
$str=explode("||", $str);
print_r($str);
//printf("<br>");
echo "<p>";
echo $str[0];
echo "<p>";
//字符串合成函数，返回值是字符串
$compose=implode("%", $str);
echo $compose;

?>