<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ܲ���־</title>
</head>

<body>
	<h1>�ܲ���־</h1>
	<div id="log">
	{include_php file='reckon.php'}
		<ul>
{foreach key=key item=item from=$log_arr}
			<li{if $item[4]!=''} onmouseover='document.getElementById("logp{$key}").style.display="block";' onmouseout='document.getElementById("logp{$key}").style.display="none";' style="color:#008000"{/if}>
				{$item[0]}: ������{$item[1]},��ʱ{$item[2]},ƽ��ÿһǧ����Ҫ��{$item[3]}��
				{if $item[4]!=''}<p id="logp{$key}" style="display:none;" class="logp">{$item[4]}</p>{/if}
			</li>
{/foreach}
		</ul>
		<div id="logz">
		<a href="?thispage=log&page=1">��ҳ</a><a href="?thispage=log&page={$page-1}">&lt;&lt;</a>
{section name=section1 loop=$lastpage start={$page-10} max=20}
			<a href="?thispage=log&page={$smarty.section.section1.index_next}" {if $smarty.section.section1.index_next==$page}style="color:green;"{/if}>{$smarty.section.section1.index_next}</a> 
{/section}
		 <a href="?thispage=log&page={$page+1}">&gt;&gt;</a><a href="?thispage=log&page={$lastpage}">βҳ</a>
		</div>
	</div>
</body>
</html>
