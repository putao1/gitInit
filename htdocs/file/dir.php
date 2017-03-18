<?php
$path='d:\xampp\htdocs';
if(is_dir($path)){
	$dir=scandir($path);
	//print_r($dir);
	foreach ($dir as $key => $value) {
		echo $key."=>".$value.'<br>';
	}
}else{
	echo $path."不是合法的目录";
}
//$path='d:\xampp\htdocs\uploads';
if($mydir=opendir($path)){
	echo "打开的目录对应的指针地址：$mydir";
	$count=0;
	while ($path=readdir($mydir)) {
		echo $path."<dir>";
		$count++;
	}
	//var_dump($mydir);
}
echo "个数$count<br>";
closedir($mydir);
$curDir=getcwd();
echo "当前所在的路径是:".$curDir;
if(!is_dir('testDir2')){
	mkdir('testDir2');
	chdir('testDir2');
}
$curDir=getcwd();
echo "<br>当前所在的路径是:".$curDir;
echo "<br>当前目录的剩余空间是：".disk_free_space($curDir);
echo "<br>当前目录的总空间是：".disk_total_space($curDir);
$used=(disk_total_space($curDir)-disk_free_space($curDir))/1024/1024/1024;
echo "<br>已经使用了".$used."G字节";
?>