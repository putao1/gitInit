<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���ļ��ϴ�</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style>
</head>
<body>
��ѡ��Ҫ�ϴ����ļ�
<form action="" method="post" enctype="multipart/form-data">
  <table border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#CCCCCC" id="up_table" >
    <tbody id="auto">
      <tr id="show" >
        <td bgcolor="#FFFFFF">�ϴ��ļ� </td>
        <td bgcolor="#FFFFFF"><input name="u_file[]" type="file"></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">�ϴ��ļ� </td>
        <td bgcolor="#FFFFFF"><input name="u_file[]" type="file"></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">�ϴ��ļ� </td>
        <td bgcolor="#FFFFFF"><input name="u_file[]" type="file"></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF">�ϴ��ļ� </td>
        <td bgcolor="#FFFFFF"><input name="u_file[]" type="file"></td>
      </tr>
    </tbody>
    <tr>
      <td colspan="4" bgcolor="#FFFFFF"><input type="submit" value="�ϴ�" /></td>
    </tr>
  </table>
</form>
<?php
if(!empty($_FILES[u_file][name])){
	$file_name = $_FILES[u_file][name];
	$file_tmp_name = $_FILES[u_file][tmp_name];
	for($i = 0; $i < count($file_name); $i++){
		if($file_name[$i] != ''){
			move_uploaded_file($file_tmp_name[$i],$i.$file_name[$i]);
			echo '�ļ�'.$file_name[$i].'�ϴ��ɹ�������Ϊ'.$i.$file_name[$i].'<br>';
		}
	}
}
?>
</body>
</html>
