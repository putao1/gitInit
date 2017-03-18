<?php
/*$num=rand(1,31);
if($num %2 ==0){
	echo "\$num=$num";
	echo "<br>$num 是偶数。";
}
*/
$month=date("n");
//echo $month;
$today=date("j");
if($today>=1 and $today<=10){
	echo "今天是".$month."月".$today."日上旬";
} elseif($today>10 and $today<=20){
	echo "今天是".$month."月".$today."日中旬";
}else{
	echo "今天是".$month."月".$today."日下旬";
}
?>