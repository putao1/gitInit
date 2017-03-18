
<form method="post" name="urlform">
<table align="center">
	<tr>
		请输入要编码的字符串
        <br>
		<textarea name='urlencode' cols=50 rows=3>
		<?php
		  if($_POST['encodeButton']!=null){	
	          $encode=urlencode($_POST['urlencode']); 
	          echo $encode;
              }
        ?>
		</textarea>
		&nbsp;&nbsp;<input type="submit" name="encodeButton" value="urlencode">		
	</tr>
   
   <tr>
        <!--<br>-->
        <br>
		请输入要解码的字符串
        <br>
		<textarea name='urldecode' cols=50 rows=3></textarea>	
		&nbsp;&nbsp;<input type="submit" name="decodeButton" value="urldecode">	
	</tr>
</table>
</form>

<?php
/*
if($_POST['encodeButton']!=null){	
	$encode=urlencode($_POST['urlencode']); 
	echo "urlencode编码后的结果是：".$encode;
}*/
if($_POST['decodeButton']!=null){
	$decode=urldecode($_POST['urldecode']);
 //urlform.urldecode.value=$encode;
	echo "urldecode解码后的结果是：".$decode;
}
?>