<?php
class ConnDB{
	var $dbType;
	var $db;
	var $host;
	var $user;
	var $pwd;
    var $conn;
	function ConnDB($dbType,$host,$user,$pwd,$db){  //初始化数据库
         $this->dbType=$dbType;
         $this->host=$host;
         $this->user=$user;
         $this->pwd=$pwd;
         $this->db=$db;
         //echo '父类初始化完成';
	}

	function getConnId(){
		$this->conn=mysql_connect($this->host,$this->user,$this->pwd) or die('数据库服务器连接错误：'.mysql_errno().':'.mysql_error());
        mysql_query('set names gb2312');
        mysql_select_db($this->db,$this->conn) or die("数据库选择错误,错误码：".mysql_errno().':'.mysql_error());//选择数据库，不用返回某个变量
        return $this->conn;
 	}

 	function closeConnId(){
 		mysql_close($this->conn);
 	}


//class AdminDB{
	function ExecSQL($sqlstr){
		$rs=mysql_query($sqlstr,$this->conn) or die('数据库操作失败：'.mysql_errno().":".mysql_error());
		$sqlType=strtolower(substr(trim($sqlstr),0,6));
		//var_dump($sqlType);
		if($sqlType=='select'){
			$result=mysql_fetch_array($rs);
			$nums=mysql_num_rows($rs);
			//echo $nums;
			//die('numss');
			if($nums==0||$rs==false){
				/*
			echo "result的结果";
			var_dump($result);
			var_dump('hi');
			echo "对应数组的数目".count(false)."<br>";//即使$result结果为false但是count($result)也为1
			die('test');
			if(count($result)==0||$rs=false){*/
				return false;
			}else{
				//var_dump($result);
				//die('admin');
				return $result;
			}
		}
		if($sqlType=='update'||$sqlType='insert'||$sqlType='delete'){
			if($rs){
				return true;
			}else{
				return false;
			}
		}
	}
}
?>
