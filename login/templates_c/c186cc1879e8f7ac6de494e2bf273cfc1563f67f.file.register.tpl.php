<?php /* Smarty version Smarty3-b8, created on 2010-11-07 09:27:39
         compiled from "D:/AppServ/www/my 20101130/login/templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1584cd6710bce2871-72476523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c186cc1879e8f7ac6de494e2bf273cfc1563f67f' => 
    array (
      0 => 'D:/AppServ/www/my 20101130/login/templates/register.tpl',
      1 => 1289122056,
    ),
  ),
  'nocache_hash' => '1584cd6710bce2871-72476523',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
<link href="css/register.css" rel="stylesheet" type="text/css" />
<script src="js/register.js" language="javascript"></script>
</head>

<body>
<form name="register" id="register" method="post" action="chk_register.php" onsubmit="return chk_register();" enctype="multipart/form-data">
	<table id="table1">
		<tr>
			<th colspan="2" align="center">���û�ע��</th>
		</tr>
		<tr>
			<td align="right">�û�����</td>
			<td><input type="text" name="user" id="user" /><input name="c_user" id="c_user" type="hidden" value="0" /></td>
		</tr>
		<tr>
			<td colspan="2"><div id="chkuser"></div></td>
		</tr>
		<tr>
			<td align="right">���룺</td>
			<td><input type="password" name="pwd1" id="pwd1" /><input name="c_pwd1" id="c_pwd1" type="hidden" value="0" /></td>
		</tr>
		<tr>
			<td colspan="2"><div id="chkpwd1"></div></td>
		</tr>
		<tr>
			<td align="right">ȷ�����룺</td>
			<td><input type="password" name="pwd2" id="pwd2" /><input name="c_pwd2" id="c_pwd2" type="hidden" value="0" /></td>
		</tr>
		<tr>
			<td colspan="2"><div id="chkpwd2"></div></td>
		</tr>
	</table>
	<table>
		<tr>
			<td><input type="button" onclick="javascript:settable()" name="button1" id="button1" value="��ʾѡ����Ϣ" /></td>
		</tr>
	</table>
	<hr />
	<table id="table2" style="display:none;">
		<tr>
			<td>�ǳƣ�</td>
			<td colspan="2"><input type="text" name="nickname" id="nickname" /></td>
		</tr>
		<tr>
			<td>�Ա�</td>
			<td colspan="2">��<input type="radio" name="sex" id="sex" value="0" checked="checked"/>Ů<input type="radio" name="sex" id="sex" value="1" /></td>
		</tr>
		<tr>
			<td>ͷ���ϴ���</td>
			<td colspan="2"><input type="file" name="head" id="head" /></td>
		</tr>
		<tr>
			<td rowspan="2">E_mail��</td>
			<td><input type="text" name="email" id="email" /><input name="c_email" id="c_email" type="hidden" value="1" /></td>
			<td><div id="chkemail"></div></td>
		</tr>
		<tr>
			<td colspan="2">����<input name="email_p" type="radio" value="0" checked="checked"/>����<input type="radio" name="email_p" value="1"/>�����ѿɼ�<input type="radio" name="email_p" value="2"/></td>
		</tr>
		<tr>
			<td>���뱣�����ʣ�</td>
			<td colspan="2"><input type="text" name="question" id="question" /></td>
		</tr>
		<tr>
			<td>���뱣���𰸣�</td>
			<td colspan="2"><input type="text" name="answer" id="answer" /></td>
		</tr>
		<tr>
			<td rowspan="2">��ʵ������</td>
			<td colspan="2"><input type="text" name="realname" id="realname" /></td>
		</tr>
		<tr>
			<td colspan="2">����<input name="realname_p" type="radio" value="0" checked="checked"/>����<input type="radio" name="realname_p" value="1"/>�����ѿɼ�<input type="radio" name="realname_p" value="2"/></td>
		</tr>
		<tr>
			<td>�������ڣ�</td>
			<td colspan="2"><?php echo $_smarty_tpl->getVariable('birthday')->value;?>
</td>
		</tr>
		<tr>
			<td>���ڳ��У�</td>
			<td colspan="2"><?php include_once ('D:\AppServ\www\My 20101130\login\select_area.php');?>
</td>
		</tr>
		<tr>
			<td>ְҵ��</td>
			<td colspan="2"><input type="text" name="work" id="work" /></td>
		</tr>
		<tr>
			<td>��ҵԺУ��</td>
			<td colspan="2"><input type="text" name="school" id="school" /></td>
		</tr>
		<tr>
			<td>��ʼ�ܲ����ڣ�</td>
			<td colspan="2"><?php echo $_smarty_tpl->getVariable('runday')->value;?>
</td>
		</tr>
		<tr>
			<td>��ߣ�</td>
			<td colspan="2"><input type="text" name="stature" id="stature" />CM</td>
		</tr>
		<tr>
			<td>���أ�</td>
			<td colspan="2"><input type="text" name="weight" id="weight" />KG</td>
		</tr>
		<tr>
			<td rowspan="2">��ϵQQ��</td>
			<td colspan="2"><input type="text" name="qq" id="qq" /></td>
		</tr>
		<tr>
			<td colspan="2">����<input name="qq_p" type="radio" value="0" checked="checked"/>����<input type="radio" name="qq_p" value="1"/>�����ѿɼ�<input type="radio" name="qq_p" value="2"/></td>
		</tr>
		<tr>
			<td rowspan="2">��ϵ�绰��</td>
			<td><input type="text" name="tel" id="tel" /><input name="c_tel" id="c_tel" type="hidden" value="1" /></td>
			<td><div id="chktel"></div></td>
		</tr>
		<tr>
			<td colspan="2">����<input name="tel_p" type="radio" value="0" checked="checked"/>����<input type="radio" name="tel_p" value="1"/>�����ѿɼ�<input type="radio" name="tel_p" value="2"/></td>
		</tr>
		<tr>
			<td>����ǩ����</td>
			<td><textarea name="sign" id="sign"></textarea></td>
		</tr>
	</table>
	<table>
		<tr align="center">
			<td><input type="submit" value="�ύ" /></td>
			<td><input type="reset" value="����" /></td>
		</tr>
	</table>
</form>
</body>
</html>
