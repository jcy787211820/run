<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
	<h1>������Ѽ�¼</h1>
	<ul>
{foreach item=item from=$record}
		<li>{$item['item']}: {$item['value']}</li>
		<li class="right">������--{$item['date']}</li>
{/foreach}
	</ul>
</body>
</html>
