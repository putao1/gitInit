<?php
date_default_timezone_set('Asia/Hong_Kong');

//function _session_open($save_path,$session_name){
function _session_open(){
global $handle;
$handle=mysql_connect('127.0.0.1','root','') or die('数据库连接失败');//连接数据库
mysql_select_db('sessionsql',$handle) or die('数据库中没有该库名');
return true;
}

function _session_close(){
global $handle;
mysql_close();
return true;
}

function _session_read($session_key){
global $handle;
$time=time();
$query="select * from sessionlist where session_key='$session_key' and session_time>$time";
var_dump($query);
$info=mysql_query($query,$handle);
$row=mysql_fetch_array($info);
if($row){
return $row['session_data'];
}
else{
	return false;
} 
}

function _session_write($session_key,$session_data){
	global $handle;
	var_dump($session_key);
	$lapse_time=time()+60*60;
	$query="select session_data from sessionlist where session_key='$session_key'";//当某个key不存在的时候 $info并不会报错。。
	$info=mysql_query($query,$handle);
	//echo 'write查询后的结果:';
	//var_dump($info);
	//die('qing');
	//$arr=mysql_fetch_array($info);
   // var_dump($arr);
	//echo '<br>';
	//print_r($info);
	if(mysql_num_rows($info)==0){
		echo '数据库写入时插入';
		$query="insert into sessionlist values('$session_key','$session_data',$lapse_time)";
		//var_dump($handle);
		$info=mysql_query($query,$handle) or die('数据库写入时插入失败');
		//var_dump(expression)
	}
	else{
         echo '数据库更新时插入';
		$query="update sessionlist set session_key='$session_key',session_data='$session_data',session_time=$lapse_time where session_key='$session_key'";
		$info=mysql_query($query,$handle) or die('数据库写入时更新失败');
	}
	return $info;
}

function _session_destroy($session_key){
	global $handle;
	$query='delete from sessionlist where session_key=$session_key';
	$info=mysql_query($query,$handle);
	return $info;
}

function _session_gc($expire_time){
	global $handle;
	$lapse_time=time();
	$query='delete from sessionlist where session_time<$lapse_time';
	$info=mysql_query($query,$handle);
	return $info;
}

session_set_save_handler('_session_open', '_session_close', '_session_read', '_session_write', '_session_destroy', '_session_gc');
session_start();

$_SESSION['user']='QingQing';
$_SESSION['pwd']='111';
//session_destroy();
//_session_open();
//mysql_query("insert into sessionlist values('uiqkueppjtfojtq29kg5t2e613','user',1234567)",$handle) or die('手动插入数据库失败');
//die('qing');
//$result=_session_write('laiuiqkueppjtfojtq29kg5t2e613','pwd');
//var_dump($result);
//$select=mysql_query("select * from where session_key='liuiqkueppjtfojtq29kg5t2e613'",$handle);

//$query="select session_data from sessionlist where session_key='qin' and session_time>1487164854";//当某个key不存在的时候 $info并不会报错。。
//$info=mysql_query($query,$handle);
//var_dump($query);
//echo '输出手动查询后的结果';
//var_dump($info);
?>