<?php
session_start();
echo "����ҳ��ʱ�䣺" , $_GET[time] , "<br>";
echo date("H:i:s");
echo "<p>";
echo $_SESSION['user'] , "<p>";
?>