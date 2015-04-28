<?php	
	session_start();
	include'config.php';
	include'conn.php';
	$user_id = $_SESSION['id'];
	$sql = "select sum(space),sum(result),avg(speed) from tb_result where user_id='$user_id'";
	$rst = $conn->Execute($sql);
	$total_space = number_format(($rst->fields(0)/1000),2) .'km';
	$smarty->assign('total_space',$total_space);
	$r_time = $rst->fields(1);
	$r_hour = floor($r_time/3600);
	$r_min = floor(($r_time%3600)/60);
	if($r_min<10) $r_min = '0' . $r_min;
	$r_sec = $r_time%60;
	if($r_sec<10) $r_sec = '0' . $r_sec;
	$total_time = $r_hour . '小时' . $r_min . '分' . $r_sec . '秒';
	$smarty->assign('total_time',$total_time);
	$a_time = $rst->fields(2);
	$a_min = floor($a_time/60);
	$a_sec = $a_time%60;
	if($a_sec<10) $a_sec = '0' . $a_sec;
	$avg_time = $a_min . '分' . $a_sec . '秒';
	$smarty->assign('avg_time',$avg_time);
	$rst2 = $conn->Execute("select space,result from tb_result where user_id='$user_id' and space>10000 order by date desc limit 1");
	$p_space = $rst2->fields(0);
	$p_time_tmp = $rst2->fields(1);
	$p_time = $p_time_tmp*pow((42195/$p_space),1.1);
	$p_hour = floor($p_time/3600);
	$p_min = floor(($p_time%3600)/60);
	if($p_min<10) $p_min = '0' . $p_min;
	$p_sec = $p_time%60;
	if($p_sec<10) $p_sec = '0' . $p_sec;
	$pre_time = $p_hour . '小时' . $p_min . '分' . $p_sec . '秒';
	$smarty->assign('pre_time',$pre_time);
	$smarty->display('reckon.tpl');
?>