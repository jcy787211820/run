<?php
	include_once'config.php';
	include_once'define.php';
///////////////////////////////���ɳ�������ѡ��˵�////////////////////////////////////////////////////
	require_once'class/select_date.class.php';
	$select_date = new select_date();
	$script= "onchange=Setday('selectyear','selectmonth','selectday','resetday');";
	$birthday = $select_date->select_date('','','','',$script,$script);
	$smarty->assign('birthday',$birthday);
////////////////////////////////���ɳ�������ѡ��˵�///////////////////////////////
	$select_date= new select_date();
	$script= "onchange=Setday('runyear','runmonth','runday','resetrun');";
	$runday  = $select_date->select_date("runyear","runmonth","runday","resetrun",$script,$script);
	$smarty->assign('runday',$runday);
////////////////////////////////���ɿ�ʼ�ܲ����ڲ˵�///////////////////////////////////////////

//////////////////////////////////���ɿ�ʼ�ܲ��˵�/////////////////////////////////////////


	$smarty->assign('title','���û�ע��');
	$smarty->display('register.tpl');
?>