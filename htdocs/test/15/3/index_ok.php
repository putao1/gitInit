<?php
session_start();				//��ʼ��SESSION׃��
class chkinput{					//������
	var $name;					//�����Ա����
   	var $pwd;
   	function chkinput($x,$y){	//���幹�췽��
    		$this->name=$x;		//Ϊ��Ա������ֵ
     	$this->pwd=$y;
    	}
   	function checkinput(){		//���巽��
     	include "conn/conn.php";	//�������ݿ�
     	$sql=mysql_query("select * from tb_user where user='".$this->name."'");	//ִ�в�ѯ
     	$info=mysql_fetch_array($sql);	//��ȡ��ѯ���
     	if($info==false){			//�ж�������ؽ��Ϊ��
          	echo "<script language='javascript'>alert('�����ڴ˻�Ա��');history.back();</script>";
          	exit;
       	}else{
          	if($info[password]==$this->pwd){	//�ж����������ͬ
			 	$_SESSION[admin_name]=$info[name];	//�򽫸��û����洢��SESSION������
             		echo "<script language='javascript'>alert('��ϲ������¼�ɹ���');window.location.href='index.php';</script>";
            	}else{
             		echo "<script language='javascript'>alert('�����������');history.back();</script>";
             		exit;
           	}
      	}
   	}
}
$obj=new chkinput(trim($_POST[name]),trim(md5($_POST[pwd])));	//ʵ������
$obj->checkinput();												//���÷���
?>
