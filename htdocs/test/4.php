<?php
$arr=array();
for($i=0;$i<5;$i++){
	for($j=0;$j<5;$j++){
       $arr[$i][$j]=$i*10+$j;
	}
}
print_r($arr);
echo count($arr);
echo "<p>";
for ($i=0;$i<5;$i++){
	for ($j=0;$j<=$i;$j++){
		echo "*";
	}
	echo "<br>";
}
/*
for ($i=0;$i<5;$i++){
	for ($j=0;$j<=$i;$j++)
		$arr[$i][]
}
*/
$url="http://localhost/1.php?name=tm&passwd=111&data=2008&id=1";
$url=explode("?",$url);
$parameter=explode("&", $url[1]);
print_r($parameter);
echo "<br>";
var_dump($parameter[count($parameter)-1]);
foreach ($parameter as $value){
  $value=str_ireplace("=", ":", $value);
  
  //if($value!==$parameter[count($parameter)-1]){
    $value=$value.",";
   //}
    $jsonArr.=$value;
    echo $value;
}
echo "<br>";
$jsonArr=rtrim($jsonArr,",");
$jsonArr="{"."$jsonArr"."}";
echo $jsonArr;
?>