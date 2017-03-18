
<!DOCTYPE html>
<html>
<head>
	<title>"url参数转为json串"</title>
</head>
<body>
<form action="url2json.php" method="post">
<table>
<tr>
<td width=120><div align="right">请输入url： </div>&nbsp</td>
<td height="30" align="left">
<textarea cols="60" rows="3" name="url" value="http://localhost/1.php?name=tm&passwd=111&data=2008&id=1"></textarea>
<input type="submit" value="url参数转为json串">
<td>
</tr>
</table>
</form>



<form action="url2json.php" method="post">
<table>
<tr>
<td width=120><div align="right">请输入json串：</div></td>
<td align="left">
<textarea cols="60" rows="3" name="json"></textarea>
<input type="submit" value="json串转换为url参数">
</td>
</tr>
</table>
</form>

<form action="url2json.php" method="post">
<table>
<tr>
<td width=120><div align="right">请输入host：
<select name="host">
<option value="cp01-chengyanqing-01.epc.baidu.com:8220/">程艳青的测试机</option>
<option value="shoubai.m.baidu.com:8003/">线下手百</option>
<option value="m1-orp-0812.m1:8230/">预览机</option>
<option value="online">线上机房</option>
</select>
</td> </div>

<td> <div align="left">
"请输入访问的url:"<input type="text" size="200" name="accessUrl" value="1.php?name=tm&passwd=111&data=2008&id=1">
</div>
<input type="submit" value="拼接对应的host和url">
</td>
</tr>
</table>
</form>

<?php
//<input type="textarea" cols="70" rows="30" name="url">
//<input type="textarea"  cols=70 rows=30 name="json">
$jsonArr="";
if($_POST['url']){
//$url="http://localhost/1.php?name=tm&passwd=111&data=2008&id=1";
$url=$_POST['url'];
$url=trim($url,'"');
//echo $url;
$url=explode("?",$url);
$parameter=explode("&", $url[1]);
//print_r($parameter);
//echo "<br>";
//var_dump($parameter[count($parameter)-1]);
foreach ($parameter as $value){
  $value=str_ireplace("=", ":", $value);
  
  //if($value!==$parameter[count($parameter)-1]){
    $value=$value.",";
   //}
    $jsonArr.=$value;
    //echo $value;
}
echo "<br>";
$jsonArr=rtrim($jsonArr,",");
$jsonArr="{"."$jsonArr"."}";
echo $jsonArr;
}

//{name:tm,passwd:111,data:2008,id:1}

if($_POST['json']){
$json=$_POST['json'];
$json=trim($json,"{} ");
$json=str_ireplace(":", "=", $json);
$json=str_ireplace(",", "&", $json);
echo $json;
}

if($_POST['host']&&$_POST['accessUrl']){
	$host=$_POST['host'];
	$accessUrl=$_POST['accessUrl'];
	$testUrl=$host.$accessUrl;
	echo $testUrl;
}
?>
</body>
</html>
