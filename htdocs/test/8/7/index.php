<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title> ��ȡ��ѡ���ֵ</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 5px;
	margin-top: 5px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<form name="form1" method="post" action="index.php">
<table width="506" cellpadding="0" cellspacing="0">
  <tr>
    <td width="462" height="25" align="center" valign="top">
	    ��ϲ����ͼ������:
	      <input type="checkbox" name="mrbook[]" value="������">
	    ������
	    <input type="checkbox" name="mrbook[]" value="������"> 
        ������
        <input type="checkbox" name="mrbook[]" value="������">
        ������
        <input type="checkbox" name="mrbook[]" value="����ʵ����">ʵ����
	  </td>
    <td width="42" align="center" valign="top"><input type="submit" name="submit" value="�ύ"></td>
  </tr>
</table>
</form>
		<?php
		if(($_POST[mrbook]!= null)){	
			echo "��ѡ��Ľ���ǣ�";
			for($i = 0;$i<count($_POST[mrbook]);$i++)
				echo $_POST[mrbook][$i]."&nbsp;&nbsp;";		//ѭ������û�ѡ���ͼ�����
		}
		?>
</body>
</html>
