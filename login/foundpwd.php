<?php
	header('Content-Type:Text/html; charset=gb2312');
	include_once "config.php";
	$smarty->assign('title','�һ�����');
	$smarty->display('foundpwd.tpl');
?>
