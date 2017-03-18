<?php
/*$num=1;
$str="10以内的偶数为:";
while($num<10){
	if($num%2==0){
		$str.=$num." "; 
	}
	$num++;	//	不要陷入无限循环
}
echo $str;*/
/*$num=1;
while($num!=1){
	echo "不会看到";
}

do{
	echo "会看到";
}while($num!=1);*/
/*
$str=1;
for ($i=1;$i<=100;$i++){
    $str*=$i;
}
echo "100!=".$str;
*/
while(true){
	$tmp=rand(1,100);
	echo $tmp." ";
	if ($tmp===10){
		echo "生成随机数10,退出循环";
		break;
	}
}
?>