<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��Ա����</title>
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
class SportObject{
	public $name;								//�����Ա����
	public $height;								//�����Ա����
	public $avoirdupois;						//�����Ա����
	
	public function bootFootBall($name,$height,$avoirdupois){				//������Ա����
		$this->name=$name;
		$this->height=$height;
		$this->avoirdupois=$avoirdupois;
		if($this->height<185 and $this->avoirdupois<85){
			return $this->name."�������������Ҫ��!";			//����ʵ�ֵĹ���
		}else{
			return $this->name."���������������Ҫ��!";			//����ʵ�ֵĹ���
		}
	}
}
$sport=new SportObject();			//ʵ�����࣬�����ݲ���
echo $sport->bootFootBall('����','185','80');								//ִ�����еķ���
?>

</body>
</html>
