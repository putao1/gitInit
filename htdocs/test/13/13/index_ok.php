<?php 
	if($_FILES['files']['name']==true){
		$filesize=$_FILES['files']['size'];
		if($filesize>1000000){
			echo "�Բ���,���ϴ����ļ������涨�Ĵ�С!!";
			echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">����3���Ӻ󷵻�ǰҳ...";
		}else{
			$path = './upfiles/'. $_FILES['files']['name'];
			if (move_uploaded_file($_FILES['files']['tmp_name'],$path)) { 
				echo "�ϴ��ɹ�!!";
				echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">"; 
			}else{
				echo "�ļ��ϴ�ʧ��!!";
          		echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\">";
			}
		}
	}
?>