<?php 
class MsubStr{
	function csubstr($str, $start, $len) { //$strָ�����ַ���,$startָ�����ַ�������ʼλ�ã�$lenָ���ǳ��ȡ�
	$strlen = $start + $len; //��$strlen�洢�ַ������ܳ��ȣ����ַ�������ʼλ�õ��ַ������ܳ��ȣ�
	for($i = 0; $i < $strlen; $i ++) { //ͨ��forѭ�����,ѭ����ȡ�ַ���
		if (ord ( substr ( $str, $i, 1 ) ) > 0xa0) { //����ַ������׸��ֽڵ�ASCII����ֵ����0xa0,���ʾΪ����
			$tmpstr .= substr ( $str, $i, 2 ); //ÿ��ȡ����λ�ַ���������$tmpstr��������һ������
			$i ++; //�����Լ�1
		} else { //������Ǻ��֣���ÿ��ȡ��һλ�ַ���������$tmpstr
			$tmpstr .= substr ( $str, $i, 1 );
		}
	}
	return $tmpstr; //����ַ���
}
}

?>