<?php
session_start();
require('../sql/sql.class.php');
//if($_SESSION['user']==""){
@$_SESSION['user']=$_POST['username'];
//var_dump($_POST['username']);die();
var_dump($_POST['pwd']);
@$_SESSION['pwd']=md5(trim($_POST['pwd']));
var_dump(trim($_POST['pwd']));
//var_dump($_POST['pwd']);

//die('test');
//if($_SESSION['user']==""){
	//echo "<script>alert('请通过合法的方式登录该系统');history.back();windows.location.href='login.php';</script>";
//}
//}
$conn=new ConnDB('mysql','127.0.0.1','root','','userinfo');
$conn->getConnId();
$sqlstr="select * from user where username='".$_SESSION['user']."'";
$result=$conn->ExecSQL($sqlstr);

if(!$result){
    echo "<script>alert('不存在该用户');history.back();</script>";

}else{
	//$row=mysql_fetch_array($result);
	//var_dump($row);die('qing');
	if($result['pwd']!=$_SESSION['pwd']){
		echo '数据库中的密码'.$result['pwd']."(".strlen($result['pwd']).")";
		echo "<br>"."用户输入的密码".$_SESSION['pwd']."<br>";
		//die('qing');
		echo "<script>alert('密码错误，请重新输入密码');history.back();</script>";
	}else{
        header('location:default2.php');
    }
}

?>