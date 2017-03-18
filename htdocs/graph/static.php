<?php
function test(){
	static $message=0;
	$message+=1;
	echo $message." ";
}
function test2(){
	$message=0;
	$message+=1;
	echo $message." ";
}
for($i=0;$i<10;$i++){
	test();
}
echo "<br>";
for($i=0;$i<10;$i++){
	test2();
}
?>