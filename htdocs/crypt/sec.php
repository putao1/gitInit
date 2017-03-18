<?php
$str='yanqing';
?>
<style type="text/css">
	.style1{
		font-family: '楷体';
		font-size: 18px;
		font-weight: bold;
		color:black;
	}
	body,td,th{
		font-size: 15px;
		color:#ff00ee;
	}
	body{
		margin-left: 10px;
		margin-right: 10px;
		margin-top: 100px;
		margin-bottom: 10px;
	}
</style>

<table align="center" border="1" background='grey' cellpadding="0" cellspacing="0">
	<tr>
		<td width="600" height=30 colspan='2' align="center" class="style1" valign="middle" scope="col">crypt、MD5、sha1单向加密函数对字符串<?php echo "'".$str."'";?>加密结果的比较</td>
	</tr>
	<tr >
		<td>crypt加密后</td>
		<td><?php echo crypt($str,'qi'); ?></td>
	</tr>
	<tr>
		<td>md5(消息摘要算法)加密后</td>
		<td>
		<?php
		  $md5=md5($str);
		  $len=strlen($md5); 
		  echo $md5."(".$len."位)"; 

		?></td>
			
		</td>
	</tr>
	<tr>
		<td>sha1(安全哈希算法)加密后</td>
		<td>
		<?php
		  $sha1=sha1($str);
		  $len=strlen($sha1); 
		  echo $sha1."(".$len."位)"; 

		?></td>
	</tr>
</table>

<?php
$md5=md5($str,false);
var_dump($md5);
?>
