<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��̬������ʹ��</title>
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
class Book{										//Book��
	static $num = 0;							//����һ����̬����$num����ֵΪ0
	public function showMe(){					//����һ������
		echo '���ǵ�'.self::$num.'λ�ÿ�';		//�����̬����
		self::$num++;							//����̬������1
	}
}
$book1 = new Book();							//ʵ��������$book1
$book1 -> showMe();								//����showMe()����
echo "<br>";
$book2 = new Book();							//ʵ��������$book2;
$book2 -> showMe();								//�ٴε���showMe()����
echo "<br>";
echo '���ǵ�'.Book::$num.'Ϊ�ÿ�';				//ֱ��ʹ���������þ�̬����
?>
</body>
</html>
