<?php
session_start();
$_SESSION[user]=$_POST[user];
$_SESSION[pwd]=$_POST[pwd];
if($_SESSION[user]==""){
  echo "<script language='javascript'>alert('��ͨ����ȷ��;����¼��ϵͳ��');history.back();</script>";
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../CSS/style.css" rel="stylesheet">
<title>ͨ��SESSION�ж��û��Ĳ���Ȩ��</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<body >

<TABLE width="856" height="498" align="center" cellPadding=0 cellSpacing=0> 
    <TR> 
      <TD height="258" valign="baseline" style="BACKGROUND-IMAGE: url(images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 50px; TEXT-ALIGN: center"><TABLE width="856" height="419" cellPadding=0 cellSpacing=0 >
          <TR>
            <TD height="176" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD>
          </TR>
          <TR>
            <TD height="214" align="center" valign="top">
              <TABLE  align="center" cellPadding=0 cellSpacing=0 >
                  <TR align="center" valign="middle">
                    <TD  style="WIDTH: 140px; COLOR: red;">��ǰ�û�:&nbsp;<?php if($_SESSION[user]=="tsoft" && $_SESSION[pwd]=="111"){echo "����Ա";}else{echo "��ͨ�û�";}?>&nbsp;&nbsp;</TD>
                    <TD width="70"><a href="#">������ҳ</a></TD>
                    <TD width="70">|&nbsp;<a href="#" >�ҵ�����</a></TD>
                    <TD width="70">|&nbsp;<a href="#" >�ҵ����</a></TD>
                    <TD width="70">|&nbsp;<a href="#">��������</a></TD>
                    <TD width="70">|&nbsp;<a href="#">�޸�����</a></TD>
                    <?php
					  if($_SESSION[user]=="tsoft" && $_SESSION[pwd]=="111"){
					?>
                    <TD width="70">|&nbsp;<a href="default.php">�û�����</a></TD>
                    <?php  
					  }
					?>
                </TR>
            </TABLE>
              <br>
              <br>
 Ů����ԶҲ��֪������Ϊʲô������˵���Ұ��㡱��3����?     <br>
 <br>
 <br> <br>
��Ϊ����֪�������ǲ���˵��ֻ�������Լ����ף�һ����Ұ�����������Ҳ������ <br>
</TD>
          </TR>
      </TABLE>
      ��ӭ���ʲ����� ��ʹ��IE 6.0 ��1024��768�ֱ������������վ&nbsp;<a href="safe.php">ע���û�</a></TD>
    </TR> 
</TABLE> 
</body>
</html>
