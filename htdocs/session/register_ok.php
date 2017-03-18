<?php
require '../sql/sql.class.php';
class register extends ConnDB{
	public $username;
	public $userpwd;
	public $email;
	
	function register($username,$userpwd,$email,$dbType,$host,$user,$pwd,$db){
		$this->username=trim($username);
		$this->userpwd=md5(trim($userpwd));
		//echo $this->pwd;
		//die('qing');
		$this->email=$email;
		//echo $this->email;
		$this->dbType=$dbType;
        $this->host=$host;
        $this->user=$user;
        $this->pwd=$pwd;
        $this->db=$db;
        parent::ConnDB($this->dbType,$this->host,$this->user,$this->pwd,$this->db);
		//echo '子类初始化完成';
		//echo $this->username;
		//echo $this->pwd;
		//echo $this->email;
		//die('post初始化后的变量');
		//
	}

	function checkinput(){
        $this->conn=parent::getConnId();
        $sqlstr="select username from user where username='".$this->username."'";
        $result=parent::ExecSQL($sqlstr);
        if(!$result){
        	$sqlstr="insert into user(username,pwd,email) values('".$this->username."','".$this->userpwd."','".$this->email."')";
        	$info=parent::ExecSQL($sqlstr);
        	if($info){
        		$_SESSION['user']=$this->username;
        		//echo '用户注册成功';
        		//echo "<script>alert('恭喜您，注册成功');window.location.href='login2.php';</script>";
        		echo "恭喜您，注册成功,1s后进入用户界面";
        		echo "<meta http-equiv=\"refresh\"; content=\"1;url=default2.php\">";
        	}else{
        		echo "<script>alert('用户注册失败');history.back();</script>";
        	}
        }
        else{
                echo "<script>alert('该用户已经被注册，请更换新的用户名');history.back();</script>";	
        }
	}
}
session_start();
//$conn=new ConnDB();
//echo $_POST['username']."<br>".$_POST['userpwd']."<br>".$_POST['email']."<br><br>";
//echo md5(trim($_POST['pwd']));
//die('post变量');
$user=new register($_POST['username'],$_POST['userpwd'],$_POST['email'],'mysql','127.0.0.1','root','','userinfo');
$user->checkinput();
?>