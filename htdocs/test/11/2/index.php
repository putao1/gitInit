<?php
date_default_timezone_set("Etc/GMT-8");
if(!isset($_COOKIE["visittime"])){									//���Cookie������
 	setcookie("visittime",date("y-m-d H:i:s")); 					//����һ��Cookie����
	echo "��ӭ����һ�η�����վ��"."<br>";							//����ַ���
}else{																//���Cookie����
	setcookie("visittime",date("y-m-d H:i:s"),time()+60); 			//���ô�CookieʧЧʱ��ı���
    echo "���ϴη�����վ��ʱ��Ϊ��".$_COOKIE["visittime"];			//����ϴη�����վ��ʱ��
	echo "<br>";													//����س���
}
	echo "�����η�����վ��ʱ��Ϊ�� ".date("y-m-d H:i:s");			//�����ǰ�ķ���ʱ��
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

