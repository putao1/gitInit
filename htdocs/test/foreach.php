<?php
$name=array("1"=>"智能机器人","2"=>"数码相机","3"=>"天翼3G手机","4"=>"瑞士手表");
$prices=array("1"=>"14998元","2"=>"2588元","3"=>"2666元","4"=>"66698元");
$counts=array("1"=>1,"2"=>1,"3"=>2,"4"=>1);
echo '<table width="580" border="1" cellpadding="1" bordercolor="#FFFFFF" bgcolor="#c17e50">
     <tr>
      <td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">商品名称</td>
      <td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">价格</td>
      <td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">数量</td>
      <td width="145" align="center" bgcolor="#FFFFFF" class="STYLE1">金额</td>
     </tr>';
foreach ($name as $key => $value) {
	echo '<tr>
     <td height="25" align="center" bgcolor="#FFFFFF" class="STYLE2">'.$value.'</td>
     <td align="center" bgcolor="#FFFFFF" class="STYLE2">'.$prices[$key].'</td>
     <td align="center" bgcolor="#FFFFFF" class="STYLE2">'.$counts[$key].'</td>
     <td align="center" bgcolor="#FFFFFF" class="STYLE2">'.$prices[$key]*$counts[$key].'</td>

	</tr>';
}
 echo '</table>';
?>