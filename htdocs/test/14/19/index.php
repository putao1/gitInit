<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>__set()��__get()����</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style></head>
<body>
<?php
class SportObject
{
	private $type = ' ';
	public function getType(){
		return $this -> type;
	}
    private function __get($name){
		if(isset($this ->$name)){
			echo '����'.$name.'��ֵΪ��'.$this -> $name.'<br>';
		}
		else{
			echo '����'.$name.'δ���壬��ʼ��Ϊ0<br>';
			$this -> $name = 0;
		}
    }
    private function __set($name, $value){
		if(isset($this -> $name)){
			$this -> $name = $value;	
			echo '����'.$name.'��ֵΪ��'.$value.'<br>';
		}else{
			$this -> $name = $value;
			echo '����'.$name.'����ʼ��Ϊ��'.$value.'<br>';
		}
    }
}
$MyComputer = new SportObject();
$MyComputer -> type = 'DIY';
$MyComputer -> type;
$MyComputer -> name;
?> 
</body>
</html>