<?php

/* if(strlen($_POST['pwd'])<6){
   // echo "<script>alert('用户密码的长度不得小于6位!请重新输入');history.back();</script>";
 	echo "<script>alert('用户密码的长度不得小于6位!请重新输入');history.back()</script>";
 }
 else{
 	echo "用户信息输入正确";
 }*/

//$str="&&  明日编程词典 && ";
//$result=trim($str,"& ");
//echo "去除特殊字符和空格后的结果是:".$result."<p>";
if(strlen($_POST['IDcard'])!=18){
	echo "<script>alert('您输入的身份证长度不对，请重新输入');history.back();</script>";
}
else
   echo "<script>alert('恭喜您，输入成功');history.back();</script>";

?>