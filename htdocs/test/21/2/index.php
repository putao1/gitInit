<?php
	include_once("../config.php");
	$arr = array('computerbook','name' => 'PHP�����ŵ��߾�ͨ','unit_price' => array('price' => '��65.00','unit' => '��'));
	$smarty->assign('title','ʹ��Smarty��ȡ����');
	$smarty->assign('arr',$arr);
	$smarty->display('02/index.html');
?>