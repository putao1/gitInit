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
	  $sql = "insert into tb_user(user,password) values('".$name."','".$pwd."')";
	  $rst = mysql_query($sql,$conn);
	  if($rst){
	  	echo "<script>alert('��ӳɹ������¼');location='index.php';</script>";
	  }else{
		echo "<script>alert('���ʧ��');history.go(-1);</script>";
	  }
	}
?>