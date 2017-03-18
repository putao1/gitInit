<?php
$filename='Jesus.txt';
if(file_exists($filename)){
	$fp=fopen($filename, 'w');
	flock($fp, LOCK_EX);//独占锁定
	fwrite($fp, 'google');
	flock($fp, LOCK_UN);
	
	readfile($filename);
	fclose($fp);
}else{
	echo '文件不存在';
}
?>