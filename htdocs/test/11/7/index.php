<?php
$path = './tmp/';							// ����session�洢·��
session_save_path($path);					
session_start();							// ��ʼ��session
$_SESSION[username] = true;
echo "Session�ļ�����Ϊ��sess_" , session_id();
?>