<?php
header("Cache-Control: no-cache");
include'config.php';
$thispage = $_GET['thispage'];
$phpath = '';
switch($thispage){
	case 'calender':
		$title = 'ѵ���ճ̱�';
		$phpath = 'calender.php';
		break;
	case 'image_frame':
		$title = '���ݷ���ͼ';
		$phpath = 'image_frame.php';
		break;
	case 'log':
		$title = '�ܲ���־';
		$phpath = 'log.php';
		break;
	case 'setcalender':
		$taitle = 'ѵ���ճ�������';
		$phpath = 'setcalender.php';
		break;
	default:
		$title = 'ѵ���ճ̱�';
		$phpath = 'calender.php';
}
$smarty->assign('title',$title);
$smarty->assign('phpath',$phpath);
$smarty->display('index.tpl');
?>