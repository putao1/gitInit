<?php
//rename('song.txt','Jesus.txt');//已经重命名后，不用再次重命名，否则将找不到某个文件
$filename='Jesus.txt';
if(file_exists($filename)){
	$fp=fopen($filename, 'rb');
	echo '文件总字节数:'.filesize($filename).'<br>';
	echo '文件内容为'.fgets($fp).'<br>';
	echo '初始指针位置:'.ftell($fp).'<br>';
	echo '使用fseek函数后指针位置'.fseek($fp,'73').'<br>';
	fclose($fp);
}else{
	echo $filename.'文件不存在';
}
?>