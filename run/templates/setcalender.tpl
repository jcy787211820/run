<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>{$title}</title>
<script src="js/setcalender.js" language="javascript"></script>
</head>

<body>
	<form name="setcalender" method="post" action="chk_setcalender.php" onsubmit="return setcalender_submit();">
		<h1>{$title}</h1>
		<div id='setcal'>
			<div class="marg" {if $tf == 'T'}style="display:none;"{/if}>{if $tf == 'T'}<input type="hidden" name="set4" id="set4" value="1"/>{/if}
				<p>��ѡ������һ�������μӹ�����Ŀ��</p>
				<ul>
					<li><input type="radio" name="set1" value="42195" onclick="dis_f();" />������</li>
					<li><input type="radio" name="set1" value="21098" onclick="dis_f();" />���������</li>
					<li><input type="radio" name="set1" value="10000" onclick="dis_f();" />10km</li>
					<li><input type="radio" name="set1" value="1" onclick="dis_t();" />�Ҹողμӳ���(ָ��ǰ�������������տ�ʼ�Ӵ����ܵ��ˣ�</li>
					<li><input type="radio" name="set1" value="2" onclick="dis_t();" />��һ���������ɣ���δ�ܹ�1�������ϵĳ��ܰ�����ѡ����</li>
					<li>�ɼ���<input name="hour" type="text" disabled="true" id="hour" style="background:#999999;border:1px solid #7F9DB9;" size="2" maxlength="2" />
					Сʱ<input name="min" type="text" disabled="true" id="min" style="background:#999999;border:1px solid #7F9DB9;" size="2" maxlength="2" />
					����<input name="sec" type="text" disabled="true" id="sec" style="background:#999999;border:1px solid #7F9DB9;" size="2" maxlength="2" />
					��</li>
				</ul>
			</div>
			<div class="marg">
				<p>��μӱ��������ڣ�<input type="text" name="set2" id="set2" onblur="return chk_date();" /> ��ʽ�磺1970-01-01<br />������Ǹողμӳ��ܵİ����ߣ�ϵͳ��Ϊ������Ϊ��9���£�36�ܣ���ѵ���ƻ���<br />������ǵ�һ�βμ������ɱ�������ôϵͳ��Ϊ������һ��Ϊ��6���£�24�ܣ���ѵ���ƻ���<br />������Ѿ��ܹ���������10km���ϵľ��룬��ôϵͳ��Ϊ������һ��Ϊ��3���£�12�ܣ���ѵ���ƻ���</p>
			</div>
			<div class="marg">
				<p>��μӵı�����Ŀ��</p>
				<ul>
					<li><input type="radio" name="set3" value="42195" />������</li>
					<li><input type="radio" name="set3" value="21098"/>���������</li>
				</ul>
			</div>
			<div class="marg" style="text-align:center;">
				<input type="hidden" name="id" id="id" value="{$id}" />
				<input type="submit" value="�ύ" /><input type="reset" value="��д" />
			</div>
		</div>
	</form>
</body>
</html>
