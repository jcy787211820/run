// JavaScript Document
window.onload = function(){
		window.resizeTo(280,320);
		window.moveTo((window.screen.width - 280)/2,(window.screen.height - 320)/2);
		window.focus();
		function $(id)
			{
				return document.getElementById(id);	
			}
/////////////////////////////////////////////////////////////////////////////////////////////��֤�û���
		$('user').onkeyup = function ()
			{
				name = $('user').value;
				if(name.match(/^\w+/) && name.length > 2)
					{
						$('chkuser').innerHTML = '<font color=green>ע�������ϱ�׼���ȴ���̨��֤.....</font>';
						$('c_user').value = '1';
					}
				else if(name.length <= 2)
					{
						$('chkuser').innerHTML = '<font color=red>ע�����Ʊ������2λ</font>';
					}
				else
					{	
						$('chkuser').innerHTML = '<font color=red>��������ĸ�����֡����»��߿�ͷ</font>';
					}
			}
/////////////////////////////////////////////////////////////////////////////////////////////��֤�û����Ƿ��ظ�
	$('user').onblur = function()
		{
			var name = $('user').value;
			if($('c_user').value == '1')
				{
					xmlhttp.open('get','chkuser.php?name='+name,true);
					xmlhttp.onreadystatechange = function()
						{
							if(xmlhttp.readyState == 4)
								{
									if(xmlhttp.status == 200)
										{
											var msg = xmlhttp.responseText;
											if(msg == '1')
												{
													$('chkuser').innerHTML="<font color=green>��ϲ�������û�������ʹ��!</font>";
													$('c_user').value = '1';
												}
											else if(msg == '2')
												{
													$('chkuser').innerHTML="<font color=red>�û�����ռ�ã�</font>";
													$('c_user').value = '0';
												}
											else
												{
													$('chkuser').innerHTML="<font color=red>"+msg+"</font>";
													$('c_user').value = '0';
												}
										}
								}
							}
					xmlhttp.send(null);
				}
		}
////////////////////////////////////////////////////////////////////////////////////////////////////��֤����
	$('pwd1').onkeyup = function(){
		pwd1 = $('pwd1').value;
		pwd2 = $('pwd2').value;
		if(pwd1.length < 6){
			$('chkpwd1').innerHTML = '<font color=red>���볤��������Ҫ6λ</font>';
			$('c_pwd1').value = '0';
		}else if(pwd1.length >= 6 && pwd1.length < 12){
			$('chkpwd1').innerHTML = '<font color=green>�������Ҫ������ǿ�ȣ���</font>';
			$('c_pwd1').value = '1';
		}else if((pwd1.match(/^[0-9]*$/)!=null) || (pwd1.match(/^[a-zA-Z]*$/) != null )){
			$('chkpwd1').innerHTML = '<font color=green>�������Ҫ������ǿ�ȣ���</font>';
			$('c_pwd1').value = '1';
		}else{
			$('chkpwd1').innerHTML = '<font color=green>�������Ҫ������ǿ�ȣ���</font>';
			$('c_pwd1').value = '1';
		}
		if(pwd2 != '' && pwd1 != pwd2){
			$('chkpwd2').innerHTML = '<font color=red>�������벻һ��!</font>';
			$('c_pwd2').value = '0';
		}else if(pwd2 != '' && pwd1 == pwd2){
			$('chkpwd2').innerHTML = '<font color=green>����������ȷ</font>';
			$('c_pwd2').value = '1';
		}
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////��֤ȷ������
	$('pwd2').onkeyup = function(){
		pwd1 = $('pwd1').value;
		pwd2 = $('pwd2').value;
		if(pwd1 != pwd2){
			$('chkpwd2').innerHTML = '<font color=red>�������벻һ��!</font>';
			$('c_pwd2').value = '0';
		}else{
			$('chkpwd2').innerHTML = '<font color=green>����������ȷ</font>';
			$('c_pwd2').value = '1';
		}
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////��֤email
	$('email').onkeyup = function(){
		emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		$('email').value.match(emailreg);
		if($('email').value.match(emailreg) == null){
			$('chkemail').innerHTML = '<font color=red>�����email��ʽ</font>';
			$('c_email').value = '0';
		}else{
			$('chkemail').innerHTML = '<font color=green>������ȷ</font>';
			$('c_email').value = '1';
		}
	}
	var ie = document.all?true:false; 
		$('weight').onkeyup = spacekey;    //��֤���̰���ʱ�����ļ�ֵ�Ƿ������֡�����'.'������backspace��
		$('weight').onkeydown = spacekey;
		$('weight').onpaste = function (){return false;} //��ֹճ�����ַ����Ա�֤�ı�����ȷ�ĸ�ʽ��
		$('stature').onkeydown = key;
		$('stature').onkeyup = key;
		$('stature').onpaste = function (){return false;}
		$('qq').onkeydown = key;
		$('qq').onkeyup = key;
		$('qq').onpaste = function (){return false;}
		$('tel').onkeydown = key;
		$('tel').onkeyup = key;
	$('tel').onkeyup = function(){
		var num = $('tel').value.length;
		if(num<11 || num >12){
			if(num>=7&&num<=8){
				$('chktel').innerHTML = '<font color=green>��ʽ��ȷ</font>';
				$('c_tel').value = '1';
			}else{
				$('chktel').innerHTML = '<font color=red>�绰������Ч</font>';
				$('c_tel').value = '0';
			}
		}else{
			$('chktel').innerHTML = '<font color=green>��ʽ��ȷ</font>';
			$('c_tel').value = '1';
		}
	}
		$('tel').onpaste = function (){return false;}
		
		if(!ie)
			{
				document.captureEvents = (event.keydown|event.keyup);
			}
		function key(e)
			{
				var num = ie?event.keyCode:e.which;	
				if((num>=48 && num <=57)|| (num >= 96 && num <= 105))
					{
						return true;
					}
				else if(num == 8)
					{
						return true;	
					}
				else
					{
						return false;	
					}
			}
		function spacekey(e)
			{
				var num = ie?event.keyCode:e.which;	
				if(num==190 || num==110)
					{
						return $('weight').value.indexOf('.') == -1;	
					}
				else
					{
						return key(e);
					}
			}
}
function settable()
	{
		var text = document['register']['button1'].value;
		if(text=='��ʾѡ����Ϣ'){
			document['register']['button1'].value = '����ѡ����Ϣ';
			document.getElementById('table2').style.display="block";
			window.resizeTo(650,500);
			window.moveTo((window.screen.width - 500)/2,(window.screen.height - 500)/2);
		}else if(text == '����ѡ����Ϣ'){
			document['register']['button1'].value = '��ʾѡ����Ϣ';
			document.getElementById('table2').style.display="none";
			window.resizeTo(280,320);
			window.moveTo((window.screen.width - 280)/2,(window.screen.height - 320)/2);
		}
	}
function chk_register(){
	if(document['register']['c_user'].value==0||document['register']['c_pwd1'].value==0||document['register']['c_pwd2'].value==0||document['register']['c_email'].value==0||document['register']['c_tel'].value==0)
		return false;
}
function Setday(year,month,day,tag)//�������ڲ˵�����ʾ���Ը��ݴ��¡�С�¡����ꡢ��ʾ��ͬ��������
	{
		var year = document.register[year].value.substr(0,4);
		var month = document.register[month].value.substr(-1);
		var today = document.register[day].value.substr(-1);
		var arr = new Array('4','6','9','11'); 	//��ʱ�������С�µ�����
		var total = 31;									//�������Ƶ��������ı�����
		var HTML = '<select name="' + day + '" id="' + day +'">';	//�ñ����Ǳ�ʾ�������ڵĲ˵�
		HTML += '<option value=0>��ѡ��</option>';
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
		document.getElementById(tag).innerHTML = HTML + '</select>';//�������ڲ˵�
	}
