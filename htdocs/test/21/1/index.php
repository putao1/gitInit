<?php
/*  ����������ľ���·��  */
define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);
/*  ����SmartyĿ¼�ľ���·��  */
define('SMARTY_PATH','\tm\sl\21\1\Smarty\\');
/*  ����Smarty����ļ�    */
require BASE_PATH.SMARTY_PATH.'Smarty.class.php';
/*  ʵ����һ��Smarty����  */
$smarty = new Smarty;
/*  �������Ŀ¼��·��    */
$smarty->template_dir = BASE_PATH.SMARTY_PATH.'templates/';
$smarty->compile_dir = BASE_PATH.SMARTY_PATH.'templates_c/';
$smarty->config_dir = BASE_PATH.SMARTY_PATH.'configs/';
$smarty->cache_dir = BASE_PATH.SMARTY_PATH.'cache/';

/*  ʹ��Smarty��ֵ������һ�Զ�����/�������͵�ģ����  */
$smarty->assign('title','��һ��Smarty����');
$smarty->assign('content','Hello,Welcome to study \'Smarty\'!');
/*  ��ʾģ��  */
$smarty->display('index.html');
?>