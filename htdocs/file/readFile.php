<style type="text/css">
	.style{
		font-weight: bold;
	}
	.style2{
		font-size: 30px;
		font-weight: bold;
		color: red;
	}
</style>
<table border="1" align="center">
	<tr>
	    <th rowspan="3" valign="center" class="style2">从文件中读取数据</th>
		<td width="20%" scope="row" class='style'>readfile()读取文件内容,直接调用函数即可,返回文件内容本身</td>
		<td><?php readfile('song.txt');?></td>
	</tr>
	<tr>
		<td scope="row" class='style'>file()读取文件内容，需要对返回的数组进行处理</td>
		<td>
		<?php 
			$arr=file('song.txt');
			foreach ($arr as $value) {
				echo $value;
				if($value!=$arr[count($arr)-1]){
					echo "<br>";
				}
				
			}
			//print_r($arr);			


		?>			
		</td>
		<tr>
		<td width="20%" scope="row" class='style'>file_get_contents()读取文件内容,返回字符串(官网可以读取指定长度，实际运行不行)</td>
		<td><?php echo file_get_contents('song.txt',10);?></td>
	</tr>
	<tr>
		<td rowspan="2" valign="center" class="style2">读取一行数据</td>
		<td class="style">fgets()函数一次读取一行数据，可以读取指定长度的数据</td>
		<td>
		<?php 
			$fopen=fopen('song.txt','rb');
			//echo fgets($fopen);
			while (!feof($fopen)) {//feof遇到结束时，返回true
				echo fgets($fopen);
			}
			
			//echo "长度20的子串";
			//echo fgets($fopen);//长度20
			fclose($fopen);
		?>
			
		</td>
	</tr>
	<tr>
		<td class="style">fgetss()函数一次读取一行数据,过滤其中的php和html标记</td>
		<td>
		<?php 
			$fopen=fopen('song.txt','rb');
			while (!feof($fopen)) {//feof遇到结束时，返回true
				echo fgetss($fopen);
			}
			fclose($fopen);
		?>
			
		</td>
	</tr>
	<tr>
		<td valign="center" class="style2">读取一个字符</td>
		<td valign="center" class="style">fgetc读取一个字符</td>
		<td>
		<?php
			$fopen=fopen('song.txt','rb');
			//echo fgetc($fopen);为何<单独只输出<的时候可以呢
			//var_dump(fgetc($fopen));
			while($ch=fgetc($fopen)){
				echo $ch;
			}
			fclose($fopen);
		?>
		</td>
	</tr>
	<tr>
		<td valign="center" class="style2">读取指定长度的字符串</td>
		<td valign="center" class="style">fread读取指定长度的字符</td>
		<td>
		<?php
			$fp=fopen('song2.txt','rb');
			//echo "长度20的子串";
			while(!feof($fp)){
				echo fread($fp,20);
			}
			fclose($fp);
		?>
		</td>
	</tr>
</table>