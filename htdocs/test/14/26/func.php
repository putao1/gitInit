<?php
/* ��Ϣ������
 */
class TakeMsg{
	function __construct(){
	}
	/* ����Ϣ����ֻ�����Ϣ
	 * ����$mess��Ҫ��ʾ����Ϣ
	 */
	function simpleMsg($mess){
		echo $mess;
	}
	/* ������ת����Ϣ����
	 * ����$mess��Ҫ��ʾ����Ϣ
	 * url ��Ҫ��ת��ҳ�棬Ĭ��Ϊˢ�±�ҳ
	 */
	function skipachange($mess,$url=NULL){
		if(!is_null($url)){
			echo "<script>alert('".$mess."');location='".$url."';</script>";
		}else{
			echo "<script>alert('".$mess."');location.reload;</script>";
		}
	}
	/* �Զ�ˢ��ҳ��
	 * ����secΪ�Զ�ˢ�µ�ʱ��
	 */
	function refurbish($mess,$sec=3,$url=NULL){
		if(is_null($url)){
			$hr = $_SERVER['HTTP_REFERER'];
			echo $mess.'<br>';
			echo 'ҳ�潫��'.$sec.'�����ת�����û����ת����������<a href="'.$hr.'">����</a>';
			echo '<meta http-equiv="refresh" content="'.$sec.';url='.$hr.'"/>';
		}else{
			echo $mess.'<br>';
			echo 'ҳ�潫��'.$sec.'�����ת�����û����ת����������<a href="'.$url.'">����</a>';
			echo '<meta http-equiv="Refresh" content="'.$sec.';url='.$url.'">';
		}
	}
}
$tm = new TakeMsg();
?>