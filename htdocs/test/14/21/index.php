<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>__sleep()��__wakeup()����</title>
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
	private $type = 'DIY';
	public function getType(){
		return $this -> type;
	}
	public function __sleep(){
		echo 'ʹ��serialize()���������󱣴����������Դ�ŵ��ı��ļ������ݿ�ȵط�<br>';
		return $this;
	}
	public function __wakeup(){
		echo '����Ҫ������ʱ��ʹ��unserialize()�����������л����ַ������в���������ת���ض���<br>';
	}
}
$myBook = new SportObject();
$i = serialize($myBook);
echo '���л�����ַ�����'.$i.'<br>';
$reBook = unserialize($i);
echo '��ԭ��ĳ�Ա������'.$reBook -> getType();
?> 
</body>
</html>
