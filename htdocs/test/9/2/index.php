<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>if�������</title>
<style type="text/css">
<!--
.style2 {font-size: 12px}
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 5px;
	margin-top: 5px;
}
-->
</style>
</head>
<script language="javascript">
function check(){
var year1=form1.year.value;
//�������year�ܹ���4��������ͬʱ���ܱ�100��������ִ����������
	if((year1%4)==0 && (year1%100)!=0){
		alert(year1+"�������꣡");			//���year������������������������Ϊ����
	}
}
</script>
<body>
<form name="form1" method="post" action="">
    <span class="style2">������꣺</span>  
    <select name="year">
    <option value="2000">2000��</option>
    <option value="2001">2001��</option>
    <option value="2002">2002��</option>
    <option value="2003">2003��</option>
    <option value="2004">2004��</option>
    <option value="2005">2005��</option>
    <option value="2006">2006��</option>
    <option value="2007">2007��</option>
    <option value="2008" selected>2008��</option>
  </select>
  <input type="submit" name="Submit" value="���" onclick="check();">
</form>
</body>
</html>
