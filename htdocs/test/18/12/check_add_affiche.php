<?php
	include_once("conn/system.inc.php");
	$title=$_POST[txt_title];
	$content=$_POST[txt_content];
	$createtime=date("Y-m-d H:i:s");
	$result=$admindb->ExecSQL("insert into tb_affiche(title,content,createtime)values('$title','$content','$createtime')",$conn);
	if($result){
		echo "<script>alert('������Ϣ��ӳɹ�!');window.location.href='add_affiche.php';</script>";	
	}else{
		echo "<script>alert('������Ϣ���ʧ��!');window.location.href='add_affiche.php';</script>";
	}
?>
