<?php
	function encrpy($str,$key='key'){
		$output;
		$num = strlen($str);
		for($i=0;$i<$num;$i++){
			$tmp = substr($str,$i,1);
			$tmp = $tmp ^ $key;
			$tmp = ~$tmp; 
			$output .= $tmp;
		}
		return $output;
	}
	function decrpy($str,$key='key'){
		$output;
		$num = strlen($str);
		for($i=0;$i<$num;$i++){
			$tmp = substr($str,$i,1);
			$tmp = ~$tmp; 
			$tmp = $tmp ^ $key;
			$output .= $tmp;
		}
		return $output;
	}
?>
<form method="post" action="#">
	������Ҫ���ܵ��ִ���<input name="str" type="text" />
	<input name="encode" type="submit" value="����" />
</form>
<form method="post" action="#">
	������Ҫ���ܵ����ģ�<input name="str" type="text" />
	<input name="decode" type="submit" value="����" />
</form>
<?php
	if($_POST['encode'] == '����'){
		echo '���ܺ�������ǣ�'.encrpy($_POST['str']);		
	}
	if($_POST['decode'] == '����'){
		echo '���ܺ�������ǣ�'.decrpy($_POST['str']);
	}
?>