<?php  
	if(!is_dir("./upfile")){ 							//�жϷ��������Ƿ����ָ���ļ���
		mkdir("./upfile");								//��������ڣ��򴴽��ļ���
	}
	array_push($_FILES["picture"]["name"],"");			//����ύ������������һ����Ԫ��   
    $array=array_unique($_FILES["picture"]["name"]);    //ɾ���������ظ���ֵ
    array_pop($array);             						//ɾ�����������һ����Ԫ
	for($i=0;$i<count($array);$i++){					//����Ԫ�ظ���ִ��forѭ��
    	$path="upfile/".$_FILES["picture"]["name"][$i];	//�����ϴ��ļ��洢λ��
		if(move_uploaded_file($_FILES["picture"]["tmp_name"][$i],$path)){	//ִ���ļ��ϴ�����
			$result=true;
		}else{
			$result=false;
		}
	}
	if($result==true){
			echo "�ļ��ϴ��ɹ������Ե�...";
			echo "<meta http-equiv=\"refresh\" content=\"3; url=index.php\">";
		}else{
			echo "�ļ��ϴ�ʧ�ܣ����Ե�...";
			echo "<meta http-equiv=\"refresh\" content=\"3; url=index.php\">";
	}

?>
