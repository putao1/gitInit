<?php
class chkinput {			//����chkinput��
	var $name;				//�����Ա����
	var $pwd;				//�����Ա����
	function chkinput($x, $y) {		//�����Ա����
		$this->name = $x;		//Ϊ��Ա������ֵ
		$this->pwd = $y;		//Ϊ��Ա������ֵ
	}
	function checkinput() {			//���巽��������û�ע��
		include "conn/conn.php";	//ͨ��include�������ݿ������ļ�
		$info = mysql_query ( "insert into tb_user(user,password)value('" . $this->name . "','" . $this->pwd . "')" );
		if ($info == false) {		//������Ӳ����ķ��ؽ����������ʾ��Ϣ
			echo "<script language='javascript'>alert('��Աע��ʧ�ܣ�');history.back();</script>";
			exit ();
		} else {
			$_SESSION [admin_name] = $this->name;		//ע��ɹ��󣬽��û�������SESSION����
			echo "<script language='javascript'>alert('��ϲ����ע��ɹ���');window.location.href='index.php';</script>";
		}
	}
}
$obj = new chkinput ( trim ( $_POST [name] ), trim ( md5 ( $_POST [pwd] ) ) );		//ʵ������
$obj->checkinput ();	//���ݷ��ض�����÷���ִ��ע�����
?>