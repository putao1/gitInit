<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>switch��֧����Ӧ��</title>
<style type="text/css">
<!--
.style2 {font-size: 12px}
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 8px;
	margin-top: 8px;
}
-->
</style>
</head>
<script language="javascript">
function check(books){
switch(books){		
	case "������":			
		alert("����ϲ����ͼ�������:"+books);
		break;
	case "������":						
		alert("����ϲ����ͼ�������:"+books);
		break;			
	case "�Ƽ���":						
		alert("����ϲ����ͼ�������:"+books);
		break;									
	case "������":							
		alert("����ϲ����ͼ�������:"+books);
		break;			
	}
}

</script>
<body>
<form name="form1" method="post" action="">
    <span class="style2">����ϲ����ͼ�����</span>  
    <input  name="book" type="radio" value="������" onClick="check(this.value);">
  ������
  <input  name="book" type="radio"value="������" onclick="check(this.value);">
    ������
    <input name="book" type="radio" value="�Ƽ���" onclick="check(this.value);">
  �Ƽ���
<input  name="book" type="radio"value="������" onclick="check(this.value);">
    ������  
</form>
</body>
</html>
