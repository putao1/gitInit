<?php
session_start();
$time = 1 * 60;															// ����sessionʧЧʱ��
setcookie(session_name(),session_id(),time()+$time,"/");				// ʹ��setcookie�ֶ�����sessionʧЧʱ��
$_SESSION['user'] = "mr";
$expiry = date("H:i:s");
if (!empty($_SESSION))
{
	echo "<a href='session.php?time=$expiry'>����SESSION�����ң�</a>";
}else
{
	echo "SESSION������";
}
?>
