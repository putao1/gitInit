<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�����ַ����Ľ�ȡ��</title>
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
</style></head>
<body>
<?php 
class MsubStr{
	function csubstr($str, $start, $len) { 				//$strָ�����ַ���,$startָ�����ַ�������ʼλ�ã�$lenָ���ǳ��ȡ�
	$strlen = $start + $len; 							//��$strlen�洢�ַ������ܳ��ȣ����ַ�������ʼλ�õ��ַ������ܳ��ȣ�
	for($i = 0; $i < $strlen; $i ++) { 					//ͨ��forѭ�����,ѭ����ȡ�ַ���
		if (ord ( substr ( $str, $i, 1 ) ) > 0xa0) { 	//����ַ������׸��ֽڵ�ASCII����ֵ����0xa0,���ʾΪ����
			$tmpstr .= substr ( $str, $i, 2 ); 			//ÿ��ȡ����λ�ַ���������$tmpstr��������һ������
			$i ++; 										//�����Լ�1
		} else { 										//������Ǻ��֣���ÿ��ȡ��һλ�ַ���������$tmpstr
			$tmpstr .= substr ( $str, $i, 1 );
		}
	}
	return $tmpstr; 									//����ַ���
	}
}
$mc=new MsubStr();										//���ʵ����
?> 
<table width="204" height="195" border="0" cellpadding="0" cellspacing="0" background="images/bg.JPG">
  <tr>
    <td width="25" height="37">&nbsp;</td>
    <td width="157">&nbsp;</td>
    <td width="22">&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td><?php 
			$string="��ע���տƼ�����עPHP�����ŵ���ͨ�İ棡";
			if(strlen($string)>10){
				echo substr($string,0,9)."...";
			}else{
				echo $string;
			}
		?>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td><?php 
			$string="��עPHP�����ŵ���ͨ�İ棡";
			if(strlen($string)>10){
				echo substr($string,0,9)."...";
			}else{
				echo $string;
			}
		?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>
		<?php 
			$strs="��ע���տƼ�����עPHP�����ŵ���ͨ�İ棡";
			if(strlen($string)>10){
				echo $mc ->csubstr($strs, "0" , "9")."...";
			}else{
				echo $strs;
			}
		?>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td><?php 
			$strs="��עPHP��̴ʵ䣡";
			if(strlen($string)>30){
				echo $mc ->csubstr($strs, "0" , "20")."...";
			}else{
				echo $strs;
			}
		?>
	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="38">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
