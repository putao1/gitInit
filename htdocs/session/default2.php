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
    <meta http-equiv="refresh" content="10;url=default2.php">
    <title>用户的正常登陆</title>
</head>
<body>

</body>
</html>

<?php

$admin=0;
//echo "缓存限制为:".$cache_limit."<br>缓存Session页面失效时间是：".$cache_expire;
$expire=time()+60;
setcookie('cookie1',$_SESSION['user'],$expire);

?>
<table align='center' width="860" height="500" background='images/bg.jpg' bgcolor="grey" valign="top">
	<tr>
		<td width="175" >
			&nbsp;当前用户:
			<?php 
			if(($_SESSION['user']=='Qing')&&($_SESSION['pwd']=='111')){
             echo '管理员';
             $admin=1;
			}else{
             echo '普通用户';
			}
			?>
		</td>
		<td width="100">欢迎您:<?php echo $_SESSION['user'];?></td>
		<td width="80">|<a href='default.php'>博客首页</a></td>
		<td width="80">|<a href='default.php'>我的文章</a></td>
		<td width="80">|<a href='default.php'>我的相册</a></td>
		<td width="80">|<a href='default.php'>音乐在线</a></td>
		<td width="80">|<a href='default.php'>修改密码</a></td>
		<td width="80">
        <?php
         if($admin==1){
         	?>
		|<a href='default.php'>用户管理</a></td>
		<?php
         }
        ?>
        <td width="80">|<a href='safe.php'>注销用户</a></td>
	</tr>

</table>








   
    
