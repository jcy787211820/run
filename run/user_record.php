<?php
	session_start();
	include'conn.php';
	include'config.php';
	$user_id=$_SESSION['id'];
	$item = array('������'=>42195,'���������'=>21098,'1����'=>10000,'5ǧ��'=>5000,'3ǧ��'=>3000,'1500��'=>1500,'1000��'=>1000,'800��'=>800,'400��'=>400);
	$i=0;
	while(list($key,$value)=each($item)){
		$space = $value;
		$sql = "select min(result),date from tb_result where user_id='$user_id' and space='$space' group by date";
		$rst = $conn->Execute($sql)or die('error');
		if($rst->fields(0)!=''){
			$hour = floor($rst->fields(0)/3600);
			$hour = $hour!=0? $hour.'Сʱ':'';
			$min = floor($rst->fields(0)%3600/60);
			if($min<10) $min = '0' + $min;
			$sec = $rst->fields(0)%60;
			if($sec<10) $sec='0'.$sec;
			$record[$i]['item'] = $key;
			$record[$i]['date'] = date('Y��m��d��',strtotime($rst->fields(1)));
			$record[$i++]['value'] = $hour . $min . '��' . $sec . '��';
		}
	}
	$smarty->assign('record',$record);
	$smarty->display('user_record.tpl');
?>