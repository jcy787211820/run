<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>{$title}</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="header">
		<div id="banner"><img src="images/banner.jpg" alt="�ܲ���������ʹ����Զ���ᣬ��ʹ���Ը��ӻ�����̬��ȥ�������" width="955" height="115" /></div>
		<ul>
			<li><a href="?thispage=calender">ѵ���ճ�</a></li>
			<li><a href="?thispage=image_frame">���ݷ���ͼ</a></li>
			<li><a href="?thispage=log">�ܲ���־</a></li>
		</ul>
	</div>
	<div id="content">
		<div id="left">
			{include_php file='user_info.php'}
			<div id="record">{include_php file='user_record.php'}</div>
		</div>
		<div id="right">
			{if $phpath=='calender.php'}
				{include_php file='calender.php'}
			{else if $phpath == 'image_frame.php'}
				{include_php file='image_frame.php'}
			{else if $phpath == 'log.php'}
				{include_php file='log.php'}
			{else if $phpath == 'setcalender.php'}
				{include_php file='setcalender.php'}
			{/if}
		</div>
		<p style="clear:both; height:20px;margin:0;"></p>
	</div>
	<div id="foot">
		{include_php file='../foot.php'}
	</div>
</body>
</html>
