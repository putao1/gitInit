<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����</title>
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
	const BOOK_TYPE = '�����ͼ��';
	public $object_name;						//ͼ������
	function setObjectName($name){				//��������setObjectName()
		$this -> object_name = $name;			//���ó�Ա����ֵ
	}
	function getObjectName(){					//��������getObjectName()
		return $this -> object_name;
	}
}
$c_book = new SportObject();						//ʵ��������
$c_book -> setObjectName("PHP��");				//���÷���setObjectName
echo SportObject::BOOK_TYPE."->";					//�������BOOK_TYPE
echo $c_book -> getObjectName();				//���÷���getObjectName
?>
</body>
</html>
