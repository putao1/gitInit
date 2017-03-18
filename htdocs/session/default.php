<?php
//session_cache_limiter('private');
//$cache_limit=session_cache_limiter();
//session_cache_expire(1);
//$cache_expire=session_cache_expire();
session_start();
//var_dump(session_id());
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <meta http-equiv="refresh" content="10;url=default.php">
    <title>利用COOKIE实现试用版的登录</title>
</head>
<body>

</body>
</html>

<?php
@$_SESSION['user']=$_POST['username'];
//var_dump($_POST['username']);die();
@$_SESSION['pwd']=$_POST['pwd'];
//if($_SESSION['user']==""){
	//echo "<script>alert('请通过合法的方式登录该系统');history.back();windows.location.href='login.php';</script>";
//}
$admin=0;
//echo "缓存限制为:".$cache_limit."<br>缓存Session页面失效时间是：".$cache_expire;
$expire=time()+60;
setcookie('cookie1',$_SESSION['user'],$expire);
if(@$_COOKIE['cookie1']!=''){
	echo 'cookie1不为空';
?>
<table align='center' width="860" height="500" background='images/bg.jpg' bgcolor="grey" valign="top">
	<tr>
		<td width="180" >
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当前用户:
			<?php 
			if(($_SESSION['user']=='Qing')&&($_SESSION['pwd']=='111')){
             echo '管理员';
             $admin=1;
			}else{
             echo '普通用户';
			}
			?>
		</td>
		<td width="80">|&nbsp;<a href='default.php'>博客首页</a></td>
		<td width="80">|&nbsp;<a href='default.php'>我的文章</a></td>
		<td width="80">|&nbsp;<a href='default.php'>我的相册</a></td>
		<td width="80">|&nbsp;<a href='default.php'>音乐在线</a></td>
		<td width="80">|&nbsp;<a href='default.php'>修改密码</a></td>
		<td width="80">
        <?php
         if($admin==1){
         	?>
		|&nbsp;<a href='default.php'>用户管理</a></td>
		<?php
         }
        ?>
        <td width="80">|&nbsp;<a href='safe.php'>注销用户</a></td>
	</tr>

</table>




<?php

}

else{
	echo 'cookie1为空';
    //echo "<script>alert('您在本网站停留的时间已经超过我们限制的时间，系统将在5秒钟后退出登录！谢谢！请稍等...');history.back();</script>";
    echo "<br>您在本网站停留的时间已经超过我们限制的时间,系统将在5秒钟后退出登录!!谢谢!请稍等...";
	echo "<meta http-equiv=\"Refresh\" content=\"5;url=login.php\">";//同一条语句在IE浏览器和在谷歌浏览器的表现不同，IE中不能回转，google可以；
    ?>

   
    
<?php
    }
 ?>
