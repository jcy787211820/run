<?php
	include'conn.php';
	$id = $_POST['id'];
	$set1 = $_POST['set1'];
	$time = $_POST['hour']*3600+$_POST['min']*60+$_POST['sec'];
	$set2 = $_POST['set2'];
	$set3 = $_POST['set3'];
	$set4 = $_POST['set4'];
	if(empty($set1)){
		if($set4!='1'){
			echo'<script>alert("��ѡ���������ɵ���Ŀ");history.back();</script>';
			exit();
		}else if($set4==1){
			$rst = $conn->Execute("select * from tb_result where user_id='$id' and space>10000 order by date desc limit 1");
			$set1 = $rst->fields('space');
			$time = $rst->fields('result');
		}
	}else{
		if($set1 != 2 && $set1 != 1){
			if($time<1200){
				echo'<script>alert("����д��Ч���ܲ��ɼ�");history.back();</script>';
				exit();
			}
		}
	}
	if(empty($set2)){								
		echo'<script>alert("����д��������");history.back();</script>';
		exit();
	}else{
		$arr = explode('-',$set2);
		if(!checkdate($arr[1],$arr[2],$arr[0])){
			echo'<script>alert("����д��Ч����");history.back();</script>';
			exit();
		}
	}
	if(empty($set3)){
		echo'<script>alert("��ѡ���㽫Ҫ�μӵ���Ŀ");history.back();</script>';
		exit();
	}
	function calender($level){
		include'conn.php';
		$sql = "select * from tb_calendar where level='$level'";
		$rst = $conn->Execute($sql);
		while($tmp = $rst->GetArray()){
			$arr = $tmp;
		}
		return $arr;
	}
	function ishalf($space,$level,$arr){
		if($space == 42195){
			foreach(calender($level) as $value){
				array_push($arr,$value);
			}
		}else if($space == 21098){
			for($i=0; $i<12; $i++){
				foreach(calender($level) as $value){
					array_push($arr,$value);
				}
			}
			$arr[count($arr)-1][3] = '��������ɱ���';
			$arr[count($arr)-1]['item'] = '��������ɱ���';
		}
		return $arr;
	}
	if($set1==1){
		$setcal = calender(0);
		foreach(calender(9) as $value){
			array_push($setcal,$value);
		}
		if($set3==42195)
			$level = 4;
		else if($set3==21098)
			$level = 1;
		$setcal = ishalf($set3,$level,$setcal);
	}else if($set1==2){
		$setcal = calender(9);
		if($set3==42195)
			$level = 4;
		else if($set3==21098)
			$level = 1;
		$setcal = ishalf($set3,$level,$setcal);
	}else{
		$result = $time*pow($set3/$set1,1.06);
		if($set3 == 21098){
			if($result>6600)
				$level = 1;
			else if($result>5400 && $resul<=6600)
				$level = 2;
			else if($result<=5400)
				$level = 3;
		}else if($set3 == 42195){
			if($result>14400)
				$level = 4;
			else if($result>12600 && $result<=14400)
				$level = 5;
			else if($result>9900 && $result <=12600)
				$level = 6;
			else if($result>8400 && $result <=9900)
				$level = 7;
			else if($result<=8400)
				$level = 8;
		}
		$setcal = array();
		$setcal = ishalf($set3,$level,$setcal);
	}
	$date = explode('-',$set2);
	date_default_timezone_set('Aisa/Shanghai');
	$date = mktime(0,0,0,$date[1],$date[2],$date[0]);
	$day = ceil(($date-time())/(24*3600));
	if($day<count($setcal)){
		echo'<script>alert("�����������̫���������������������һ�������ɵ�ѵ�����ڡ�Ϊ�˱��ⲻǡ����ѵ���������ˣ������㽫�μӱ����������Ƴ�");history.back();</script>';
		exit;
	}else{
		if($set1==1){
			$theday = 0;
			$key = 0;
			for($i=0; $i<168; $i++){
				$insert[$key]['user_id'] = $id;
				$insert[$key]['level'] = 1;
				$insert[$key]['date'] = date('Y-m-d',time()+24*3600*(++$theday));
				$insert[$key]['item'] = $setcal[$i]['item'];
				$key++;
			}
			for($i=0; $i<$day - count($setcal); $i++){
				foreach(calender(1) as $value){
					if($key<=$day - count($setcal)+168){
						$insert[$key]['user_id'] = $id;
						$insert[$key]['level'] = 1;
						$insert[$key]['date'] = date('Y-m-d',time()+24*3600*(++$theday));
						$insert[$key]['item'] = $value['item'];
						$key++;
					}
				}
			}
			$key--;
			for($i=168; $i<252; $i++){
				$insert[$key]['user_id'] = $id;
				$insert[$key]['level'] = 1;
				$insert[$key]['date'] = date('Y-m-d',time()+24*3600*($theday++));
				$insert[$key]['item'] = $setcal[$i]['item'];
				$key++;
			}
		}else if($set1==2){
			$theday = 0;
			$key = 0;
			for($i=0; $i<84; $i++){
				$insert[$key]['user_id'] = $id;
				$insert[$key]['level'] = 1;
				$insert[$key]['date'] = date('Y-m-d',time()+24*3600*(++$theday));
				$insert[$key]['item'] = $setcal[$i]['item'];
				$key++;
			}
			for($i=0; $i<$day - count($setcal); $i++){
				foreach(calender(1) as $value){
					if($key<=$day - count($setcal)+84){
						$insert[$key]['user_id'] = $id;
						$insert[$key]['level'] = 1;
						$insert[$key]['date'] = date('Y-m-d',time()+24*3600*(++$theday));
						$insert[$key]['item'] = $value['item'];
						$key++;
					}
				}
			}
			$key--;
			for($i=84; $i<168; $i++){
				$insert[$key]['user_id'] = $id;
				$insert[$key]['level'] = 1;
				$insert[$key]['date'] = date('Y-m-d',time()+24*3600*($theday++));
				$insert[$key]['item'] = $setcal[$i]['item'];
				$key++;
			}
		}else{
			$theday = 0;
			$key = 0;
			$rel = $time*pow(21098/$set1,1.06);
			if($rel>6600)
				$h_level = 1;
			else if($result>5400 && $resul<=6600)
				$h_level = 2;
			else if($result<=5400)
				$h_level = 3;
			for($i=0; $i<$day - count($setcal); $i++){
				foreach(calender($h_level) as $value){
					if($key<=$day - count($setcal)){
						$insert[$key]['user_id'] = $id;
						$insert[$key]['level'] = $h_level;
						$insert[$key]['date'] = date('Y-m-d',time()+24*3600*(++$theday));
						$insert[$key]['item'] = $value['item'];
						$key++;
					}
				}
			}
			$key--;
			for($i=0; $i<count($setcal); $i++){
				$insert[$key]['user_id'] = $id;
				$insert[$key]['level'] = $level;
				$insert[$key]['date'] = date('Y-m-d',time()+24*3600*($theday++));
				$insert[$key]['item'] = $setcal[$i]['item'];
				$key++;
			}
		}
	}
	$rst1 = $conn->Execute('select * from tb_setcal where id=-1')or die('err');
	foreach($insert as $value){
		$user_id= $value['user_id'];
		$date = $value['date'];
		$item = $value['item'];
		$sql = "select * from tb_setcal where user_id='$user_id' and date='$date'";
		$rst2 = $conn->Execute($sql)or die('error');
		if($rst2->RecordCount()>0)
			$sql = "UPDATE tb_setcal SET item='$item' WHERE user_id='$user_id' and date='$date'";
		else
			$sql = $conn->GetInsertSQL($rst1,$value);
		$conn->Execute($sql)or die('����ѵ���ճ�ʧ�ܣ�����ԭ��δ֪');
	}
	echo'<script>alert("�ɹ�����ѵ���ճ̱�");location="index.php";</script>';
?>