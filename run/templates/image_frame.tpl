<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<script src="js/image_frame.js" language="javascript"></script>
<script src="js/xmlhttp.js" language="javascript"></script>
</head>

<body>
<form>
	<h1>���ݷ���</h1>
	<div id="sj">
		<div id="sjh">
			<select name="x_unit" id="x_unit" onchange="weekday();">
				<option value="day" selected="selected">��</option>
				<option value="week">��</option>
			</select>
			<select name="y_unit" id="y_unit" onchange="reloadimage();">
				<option value="space" selected="selected">����</option>
				<option value="time">ʱ��</option>
				<option value="speed">�ٶ�</option>
			</select>
			<span>���ݷ���ͼ</span>
		</div>
		<div id="div_im">
			<img src="image.php" width="678" height="350" />
		</div>
		<div id="sjf">
			<input type="button" value="<<" onclick="goback('b');"/>
			<input type="text" value="{$firstday|date_format:'%Y��%m��%d��'}" name="firstday" id="firstday" onblur="resetday('a');" />
			<span>��</span>
			<input type="text" value="{$lastday|date_format:'%Y��%m��%d��'}" name="lastday" id="lastday" onblur="resetday('d');" />
			<input type="button" value=">>" onclick="goback('g');" />
		</div>
	</div>
</form>
</body>
</html>
