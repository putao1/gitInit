<?php
session_start();
if ($_SESSION[username] != "")
echo "��ȴ�SessionʧЧ<br>��ʱSESSION���ڣ�";
else 
echo "SESSION�Ѿ�ʧЧ";
?>