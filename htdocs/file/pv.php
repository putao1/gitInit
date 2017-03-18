<?php
session_start();
$filename='pv.txt';
//echo file_get_contents($filename);
//die('bengkui');
if(!is_file($filename))
{
	echo 'hello';
    $_SESSION['pv']=1;   
    $fp=fopen($filename,'w');//文件不存在的话先创建文件 
    flock($fp, LOCK_EX);//独占锁
    
    
}else{
	echo 'hi';
	$_SESSION['pv']=file_get_contents($filename)+1;//在w+模式下，该函数无法使用；在r+和r的模式下该函数可以使用
	$fp=fopen($filename,'r+');//文件存在的话先读文件
	
	
	//flock($fp,LOCK_SH);//共享锁
	
	echo file_get_contents($filename);
	//die('we');
	flock($fp,LOCK_EX);//独占锁	
	//die('we');
	
	
}

fwrite($fp, $_SESSION['pv']);//写入新的数目
////释放独占锁
flock($fp,LOCK_SH);//共享锁
$count=file_get_contents($filename);//只有独占锁的时候，只能写入，无法读取，此时可以加一把共享锁；或者释放 “独占锁”
echo "您好，该页面第".$count."次被访问";
flock($fp,LOCK_UN);
fclose($fp);//关闭句柄
//session_destroy();
?>