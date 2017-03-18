<?php
$fp=fopen('http://localhost/', 'rb');
while(!feof($fp)){
	echo fgets($fp)."<br>";
}
fclose($fp);
?>