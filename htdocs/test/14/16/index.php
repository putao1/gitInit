<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>__clone()����</title>
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
class SportObject{									//��SportObject
	private $object_type = 'book';				//����˽�б���$object_type��������ֵ���ڡ�book��
	public function setType($type){				//������Ա����setType��Ϊ����$object_type��ֵ
		$this -> object_type = $type;
	}
	public function getType(){					//������Ա����getType�����ر���$object_type��ֵ
		return $this -> object_type;
	}
	public function __clone(){					//����__clone()����
		$this ->object_type = 'computer';		//������$object_type��ֵ�޸�Ϊcomputer
	}
}
$book1 = new SportObject();						//ʵ��������$book1
$book2 = clone $book1;							//ʹ����ͨ�������͵ķ���������$book2��ֵ
echo '����$book1�ı���ֵΪ��'.$book1 -> getType();//�������$book1��ֵ
echo '<br>';
echo '����$book2�ı���ֵΪ��'.$book2 -> getType();
?>

</body>
</html>
 