// JavaScript Document
window.onload = function(){
	if(window.navigator.appName=='Microsoft Internet Explorer'){
		window.resizeTo(380,380);
		window.moveTo((window.screen.width - document.body.clientWidth)/2,(window.screen.height - document.body.clientHeight)/2);
	}else{
		window.resizeTo(380,430);
		window.moveTo((window.screen.width - window.innerWidth)/2,(window.screen.height - window.innerHeight)/2);
	}
	window.focus();
	var ie = document.all?true:false; 
	if(!ie){
		document.captureEvents = (event.keydown|event.keyup);
	}
	event_tag('space');
	event_tag('result1');
	event_tag('result2');
	event_tag('result3');
	function event_tag(tag){
		document['result'][tag].onkeydown = key;
		document['result'][tag].onkeyup = key;
		document['result'][tag].onpaste = function(){return false};
		if(tag=='result1' || tag=='result2' || tag=='result3' || tag=='space'){
			document.result[tag].onkeyup = function(){
				var re = document['result']['result1'].value*3600 + document['result']['result2'].value*60 + Number(document['result']['result3'].value);
				var sp = Number(document['result']['space'].value)/1000;
				var m = Math.floor((re/sp)/60);
				if((re/sp)%60<10){
					var s = '0' + ((re/sp)%60);
				}else{
					var s=(re/sp)%60;
				}
				var speed = m + '"' + Math.floor(s);
				document['result']['speed'].value = speed;
			}
		}
		var i=0;
		while(document['result'][tag+i]){
			document['result'][tag+i].onkeydown = key;
			document['result'][tag+i].onkeyup = key;
			document['result'][tag+i].onpaste = function(){return false};
			i++;
		}
	}
	function key(e){
		var num = ie?event.keyCode:e.which;	
		if((num>=48 && num <=57)|| (num >= 96 && num <= 105)){
			return true;
		}else if(num == 8||num == 9){
			return true;	
		}else{
			return false;	
		}
	}
}
function Setyear1(){			//������ݣ���Сһ�꣩
		var year = document.result['year'].value;
		year = year.substr(0,4);
		document.result['year'].value = --year+'��';
		Setday();
}
function Setyear2(MAX){		//������ݣ�����һ�꣩����ֵ�������������ݡ�
	var year = document.result['year'].value;
	year = year.substr(0,4);
	if(year < MAX){
		document.result['year'].value = ++year+'��';
	}
	Setday();
}
function Setday(){//�������ڲ˵�����ʾ���Ը��ݴ��¡�С�¡����ꡢ��ʾ��ͬ��������
		var month = document.result['month'].value;
		var year = document.result['year'].value.substr(0,4);
		var today = document.result['day'].value;
		var arr = new Array('4','6','9','11'); 	//��ʱ�������С�µ�����
		var total = 31;									//�������Ƶ��������ı�����
		var HTML = '<select name="day" id="day">';	//�ñ����Ǳ�ʾ�������ڵĲ˵�
		if(month == '2')							//����2�·ݵ�������
			{
				total =  year%4==0?29:28;
			}
		else										//�����С�°�������31��Ϊ30�����²������ġ�
			{
				for(var i=0; i<arr.length; i++)
					{
						if(month == arr[i])
							{
								total = 30;				
							}
					}
			}
		for(var i=1; i<=total; i++)					//���ɾ;������ڵĲ˵�
			{
				if(today == i)
					{
						HTML += '<option value="' + i + '" selected="selected">' + i + '��</option>';	
					}
				HTML += '<option value="' + i + '">' + i + '��</option>';	
			}							
		document.getElementById('resetday').innerHTML = HTML + '</select>';//�������ڲ˵�
	}
function addresult(){
	var user_id = document['result']['user_id'].value;
	var date= document['result']['year'].value.substr(0,4)+'-'+document['result']['month'].value.substr(-2)+'-'+document['result']['day'].value.substr(-2);
	var item_name = document['result'][	'item'].value;
	var space = document['result'][	'space'].value;
	var result = document['result']['result1'].value*3600+document['result']['result2'].value*60+Number(document['result']['result3'].value);
	if(space==''||result==''){
		alert('��û����д��Ҫ��Ϣ');
		return false;	
	}else{
		var url='addresult.php?user_id='+user_id+'&date='+date+'&item='+item_name+'&space='+space+'&result='+result;
		createxmlhttp(url);
	}
}
function delresult(id){
	var url='delresult.php?id='+id;
	if(confirm("��¼��ɾ���󣬲��ɻָ�,ȷ��Ҫɾ����")){
		createxmlhttp(url);		   
	}
}
function updateresult(id,key){
	var user_id = document['result']['user_id'].value;
	var item_name = document['result'][	'item'+key].value;
	var date = document['result']['year'].value.substr(0,4)+'-'+document['result']['month'].value.substr(-2)+'-'+document['result']['day'].value.substr(-2);
	var space = document['result'][	'space'+key].value;
	var result = document['result']['result1'+key].value*3600+document['result']['result2'+key].value*60+Number(document['result']['result3'+key].value);
	var url='updateresult.php?user_id='+user_id+'&date='+date+'&item='+item_name+'&space='+space+'&result='+result+'&id='+id;
	createxmlhttp(url);
}
function savelog(){
	var user_id = document['result']['user_id'].value;
	var date= document['result']['year'].value.substr(0,4)+'-'+document['result']['month'].value.substr(-2)+'-'+document['result']['day'].value.substr(-2);
	var remark = document['result']['remark'].value;
	var url = 'savelog.php?user_id='+user_id+'&remark='+encodeURIComponent(remark)+'&date='+date;
	createxmlhttp(url);
}
function createxmlhttp(url){
	xmlhttp.open('GET',url,true);
	xmlhttp.onreadystatechange= function(){
		if(xmlhttp.readyState==4 || xmlhttp.status==200){
			if(xmlhttp.responseText!='')alert(xmlhttp.responseText);
			opener.location.reload();
			location.reload();
		}
	}
	xmlhttp.send(null);
}