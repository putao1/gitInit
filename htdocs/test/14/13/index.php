<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������</title>
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
	abstract class CommodityObject{							//���������
		abstract function service($getName,$price,$num);	//������󷽷�
	}
	class MyBook extends CommodityObject{				//�������࣬�̳г�����
		function service($getName,$price,$num){		//���巽��
			echo '���������Ʒ��'.$getName.'������Ʒ�ļ۸��ǣ�'.$price.' Ԫ��';
			echo '�����������Ϊ��'.$num.' ����';
			echo '�緢��ȱҳ��������3���ڸ�����';
		}
	}
	class MyComputer extends CommodityObject{			//��������̳и���
		function service($getName,$price,$num){			//���巽��
			echo '���������Ʒ��'.$getName.'������Ʒ�ļ۸��ǣ�'.$price.' Ԫ��';
			echo '�����������Ϊ��'.$num.' ̨��';
			echo '�緢������Ϊ�������⣬����3�����ڸ�����';
		}
	}
	$book = new MyBook();					//ʵ��������
	$computer = new MyComputer();			//ʵ��������
	$book -> service('��PHP�����ŵ���ͨ��',85,3);	//���÷���
	echo '<p>';
	$computer -> service('XX�ʼǱ�',8500,1);		//���÷���
	
	
?>
</body>
</html>
