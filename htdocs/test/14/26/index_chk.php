<?php
	include_once "func.php";
	if($_POST['name'] != "tm"){
		$tm -> refurbish('�û�������');
	}else{
		$tm -> skipachange('�����û�����ӭ���Ĺ���','main.php');
	}
?>