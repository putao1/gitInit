<?php
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];
	$meth = $_POST['method'];
	$key = 'tomorrow';
	if($name != '' and $pwd != ''){
	  $conn = mysql_connect("localhost","root","root") or die("���ݿ����Ӵ���".mysql_error());
	  mysql_select_db("db_database15",$conn) or die("���ݿ���ʴ���".mysql_error());
	  mysql_query("set names gb2312");
	  if($meth == "crypt"){
	  	$pwd = crypt(trim($pwd),$key);
	  }else{
	  	$pwd = md5($pwd);
	  }
	  $sql = "select * from tb_user where user = '".$name."' and password = '".$pwd."'";
	  $rst = mysql_query($sql,$conn);
	  if(mysql_num_rows($rst) > 0){
		echo "<font color='red'>�û���½�ɹ�</font>&nbsp;<a href=index.php>����</a>";
	  }else{
		echo "<script>alert('������ʺ��������');history.go(-1);</script>";
	  }
	}
?>