<?php
	session_start();
	include_once'conn.php';
	include_once'config.php';
	$id= $_SESSION['id'];
	if(empty($id)) exit;
	$sql = "select * from tb_result where user_id=$id and space>=10000";
	$rst = $conn->Execute($sql);
	if($rst->RecordCount()>0)
		$tf = 'T';
	else
		$tf = 'F';
	$smarty->assign('id',$id);
	$smarty->assign('tf',$tf);
	$smarty->assign('title','ѵ���ճ̱�������');
	$smarty->display('setcalender.tpl');
?>