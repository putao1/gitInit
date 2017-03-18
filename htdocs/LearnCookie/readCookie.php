<?php
date_default_timezone_set('Asia/Hong_kong');
if(!isset($_COOKIE['visitTime'])){
	setcookie('visitTime',date('Y-m-d H:i:s'));
	echo '欢迎您第一次访问本网站';
}else{
	setcookie('visitTime',date('Y-m-d H:i:s'),time()+60);
	echo '您上次访问本网站的时间是：'.$_COOKIE['visitTime'];
}
echo '<br>您本次访问的时间是:'.date('Y-m-d H:i:s');


?>