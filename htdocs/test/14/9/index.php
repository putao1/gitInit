<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>private�ؼ���</title>
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
class Book{
	private $name = 'computer';							//����˽�б���$name
	public function setName($name){						//����˽�б���
		$this -> name = $name;
	}
	public function getName(){							//��ȡ˽�б���
		return $this -> name;
	}
}
class LBook extends Book{								//Book�������	
}
$lbook = new LBook();									//ʵ��������
echo '��ȷ����˽�б����ķ�����';
$lbook -> setName("PHP�����ŵ���ͨ");					//��˽�б������в���
echo $lbook -> getName();
echo '<br>ֱ�Ӳ���˽�б����Ľ����';					//��˽�б������в���
echo Book::$name;
?>
</body>
</html>
