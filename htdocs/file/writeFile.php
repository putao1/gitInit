<?php
echo "<p>利用fwite()写入文件：";
$filename='write.txt';
$fopen=fopen($filename, 'ab');//追加的方式写入
//$fopen=fopen($filename, 'wb');//覆盖的方式写入
fwrite($fopen, '1');
fclose($fopen);//关闭文件句柄
readfile($filename);
$filename2='write2.txt';
echo "<p>file_put_contents()写文件：";
file_put_contents($filename2,'2',FILE_APPEND);
//file_put_contents($filename2,'2');
readfile($filename2);

?>