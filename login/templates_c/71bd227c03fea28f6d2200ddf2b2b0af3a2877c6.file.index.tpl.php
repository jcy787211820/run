<?php /* Smarty version Smarty3-b8, created on 2010-11-09 00:52:17
         compiled from "D:/AppServ/www/my 20101130/login/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245004cd89b41891ea6-80426620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71bd227c03fea28f6d2200ddf2b2b0af3a2877c6' => 
    array (
      0 => 'D:/AppServ/www/my 20101130/login/templates/index.tpl',
      1 => 1289263848,
    ),
  ),
  'nocache_hash' => '245004cd89b41891ea6-80426620',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>5DE7.NET|������ɫ���ܲ���վ(ѵ���ճ̱�|���ݷ���ͼ|������Ѽ�¼|�����ɳɼ�Ԥ�⣩</title>
<link href="../css/body.css" rel="stylesheet" type="text/css" />
<link href="css/index.css" rel="stylesheet" type="text/css" />
<script src="js/index.js" language="javascript"></script>
</head>

<body>
<form name="login" id="login" method="post" action="chk_login.php" onsubmit="return chk_login()">
	<div id="left">
		<div id="left1">
		<img src="images/logo.gif" width="180" height="34" />
		</div>
		<div id="left2">
				<h1>����������ɫ���ܲ���վ</h1>
				<p>��¼5de7.net����¼����ܲ����̣��ƶ����Ի�������ѵ���ƻ���ʹ�����ݷ���ͼ�������˽��Լ���ѵ��״����</p>
		</div>
		<div id="left3">
			<div id="left31">
				<h2>�ճ�</h2>
				<p>�������ѵ��ˮƽ��Ϊ���������ܲ�ѵ���ճ̡�</p>
			</div>
			<div id="left32">
				<h2>����</h2>
				<p>�ṩÿ�ܺ�ÿ�յ��ٶȡ�������ʱ��������</p>
			</div>
			<div id="left33">
				<h2>��־</h2>
				<p>�����ܲ���¼�Զ������ܲ���־��</p>
			</div>
			<div id="left34">
				<h2>��¼</h2>
				<p>�����¼�����Ŀ�ĸ�����Ѽ�¼��</p>
			</div>
		</div>
		<p style="clear:both;"><!--�����������--></p>
	</div>
	<div id="right">
		<h1>�û���¼</h1>
		<ul>
			<li><span>�û�����</span><input type="text" name="user" id="user" /></li>
			<li><span>��&nbsp;&nbsp;�룺</span><input type="password" name="pwd" id="pwd" /></li>
			<li>
				<span>��֤�룺</span>
				<input type="text" name="check_p" id="check_p" />
				<input type="hidden" name="check_h" id="check_h" />
				<span id="check_image"></span>
				<script>check_image();</script>
				<a href="javascript:check_image()">������</a>
			</li>
			<li style="text-align:center; margin-top:10px;">
				<input type="submit" value="��¼" />
				<input type="button" onclick="open_foundpwd();" value="��������" />
			</li>
		</ul>			
	</div>
	<div id="right2">
		<h2>��û���˺ţ�</h2>
		<input type="button" onclick="open_register()" value="���ע��"/>
	</div>
	</form>
<?php include_once ('D:\AppServ\www\My 20101130\foot.php');?>
 
</body>
</html>
