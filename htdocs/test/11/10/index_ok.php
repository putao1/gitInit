<?php 
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    setcookie("cookie1",$_POST['user'],time()+30);
    
    if($user!=""&&$pass!=""){
	header("location:study.php");
	}
  ?>