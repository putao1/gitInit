<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��::��������</title>
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
	const NAME = 'computer';							//����NAME
	function __construct(){								//���췽��
		echo '����ͼ����ھ�Ϊ��'.Book::NAME.' ';		//���Ĭ��ֵ
	}
}
class l_book extends Book{								//Book�������
	const NAME = 'foreign language';					//��������
	function __construct(){								//����Ĺ��췽��
		parent::__construct();							//���ø���Ĺ��췽��
		echo '����ͼ����ھ�Ϊ��'.self::NAME.' ';		//��������е�Ĭ��ֵ
	}
}
$obj = new l_book();									//ʵ��������
?>
</body>
</html>
