<?php
$time = 1 * 60;									// ����sessionʧЧʱ��
session_set_cookie_params($time);				// ʹ�ú���
session_start();								// ��ʼ��session
$_SESSION[username] = 'mr';
if ($_SESSION[username] != "")
{
	echo "<a href='session.php'>�����Ҳ鿴�Ƿ�ʧЧ��</a>";
}else 
{
	echo "û������SESSION";
}
?>