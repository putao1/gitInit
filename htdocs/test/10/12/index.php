<?php session_start();
date_default_timezone_set("Etc/GMT-8");						// ����ʱ�� ��ǰΪ����ʱ��
if($_POST['Submit']==true){
	$dateH=date("H");
	$datei=date("i");
	$dates=date("s");
	$truedate=date("M-d-Y H:i:s", mktime ($dateH,$datei,$dates,$month,$day,$year));
}
?> 
<style type="text/css">
<!--
.STYLE1 {font-size: 13px;
         color: #0099CC;
}
.STYLE3 {
	font-size: 16px;
	font-weight: bold;
	color: #0099CC;
}
.STYLE5 {font-size: 16px; font-weight: bold; font-family: "���ķ���"; color: #0099CC; }
.STYLE7 {font-size: 13px}
-->
</style>
<title>��ȡָ������һ���ʱ��</title><form id="form1" name="form1" method="post" action="index.php">
<table width="446" border="5" cellpadding="5" cellspacing="5" bordercolor="#97C5F7">
  <tr>
    <td height="30" colspan="3" align="center"><span class="STYLE3">��ȡָ������һ���ʱ��</span></td>
  </tr>
  <tr>
    <td width="81" align="center"><span class="STYLE1">��������:</span></td>
    <td width="226" height="24"><span class="STYLE1">
      <input name="year" type="text" id="year" size="5" />
      ��
      <input name="month" type="text" id="month" size="3" />
      ��
      <input name="day" type="text" id="day" size="3" />
      ��</span></td>
    <td width="73" align="center"><input name="Submit" type="submit" value="�ύ" /></td>
    </tr>
  <tr>
    <td height="26" colspan="3" align="center"><span class="STYLE5">��ȷ������Ϊ:<?php echo $truedate;?></span></td>
  </tr>
  <tr>
    <td height="73" colspan="3" align="center"><div align="left"><span class="STYLE7">ע�⣺��1�����������ֵ�ʱ�����е����������λ����λ���֣�ȡֵ��0-69��ʾ2000-2069�ꣻ70-99��ʾ1970-1999�ꡣ��2����time_t��32λ�з���������ϵͳ�У������Ч��Χ��1901��2038����3��Ŀǰ���е�Windowsϵͳ����֧�ָ���ʱ�������˺Ϸ�����ݷ�Χֻ������1970��2038��</span></div></td>
  </tr>
</table>
</form>