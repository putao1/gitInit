<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�̳е�ʵ��</title>
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
/*  ����  */
class SportObject{
	public $name;								//����������Ա����
	public $age;								//���������Ա����
	public $avoirdupois;						//�������س�Ա����
	public $sex;								//�����Ա��Ա����
	public function __construct($name,$age,$avoirdupois,$sex){				//���幹�췽��
		$this->name=$name;						//Ϊ��Ա������ֵ
		$this->age=$age;						//Ϊ��Ա������ֵ
		$this->avoirdupois=$avoirdupois;		//Ϊ��Ա������ֵ
		$this->sex=$sex;						//Ϊ��Ա������ֵ
	}
	function showMe(){							//���巽��
		echo '��仰������ʾ��';
	}
}
/*  ����BeatBasketBall  */
class BeatBasketBall extends SportObject{				//�������࣬�̳и���
	public $height;										//������߳�Ա����
	function __construct($name,$height){				//���幹�췽��
		$this -> height = $height;						//Ϊ��Ա������ֵ
		$this -> name = $name;							//Ϊ��Ա������ֵ
	}
	function showMe(){									//���巽��
		if($this->height>185){
			return $this->name."�����ϴ������Ҫ��!";			//����ʵ�ֵĹ���
		}else{
			return $this->name."�������ϴ������Ҫ��!";			//����ʵ�ֵĹ���
		}
	}
}
/*  ����WeightLifting  */
class WeightLifting extends SportObject{						//�̳и���
	function showMe(){											//���巽��
		if($this->avoirdupois<85){
			return $this->name."�����Ͼ��ص�Ҫ��!";				//����ʵ�ֵĹ���
		}else{
			return $this->name."�������Ͼ��ص�Ҫ��!";			//����ʵ�ֵĹ���
		}
	}
}


//ʵ��������
$beatbasketball = new BeatBasketBall('�Ƽ�','190');				//ʵ��������
$weightlifting = new WeightLifting('����','185','80','20','��');
echo $beatbasketball->showMe()."<br>";							//������
echo $weightlifting->showMe()."<br>";
?>
</body>
</html>
