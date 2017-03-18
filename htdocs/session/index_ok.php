<?php 
    $user=$_POST['username'];
    $pass=$_POST['pwd'];
    setcookie("cookie1",$user,time()+30);
    
    if($user!=""&&$pass!=""){
	header("location:default.php");
	}
	else{
		//echo '用户名或者密码为空,请重新输入';
		//header("location:login.php");
		echo "<script>alert('用户名不能为空！');history.back()</script>";
		
	}
  ?>