<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���췽��</title>
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
	public $age;								//�����Ա����
	public $sex;								//�����Ա����
	public function __construct($name,$height,$avoirdupois,$age,$sex){				//���幹�췽��
		$this->name=$name;						//Ϊ��Ա������ֵ
		$this->height=$height;					//Ϊ��Ա������ֵ
		$this->avoirdupois=$avoirdupois;		//Ϊ��Ա������ֵ
		$this->age=$age;						//Ϊ��Ա������ֵ
		$this->sex=$sex;						//Ϊ��Ա������ֵ
	}
	public function bootFootBall(){				//������Ա����
		if($this->height<185 and $this->avoirdupois<85){
			return $this->name."�������������Ҫ��!";			//����ʵ�ֵĹ���
		}else{
			return $this->name."���������������Ҫ��!";			//����ʵ�ֵĹ���
		}
	}
}
$sport=new SportObject('����','185','80','20','��');			//ʵ�����࣬�����ݲ���
echo $sport->bootFootBall();								//ִ�����еķ���

?>

</body>
</html>
