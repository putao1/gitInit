<?php
$name="智能机器人@数码相机@天翼3G手机@瑞士手表";
$price='14998@2588@2666@66698';
$counts='1@2@3@4';
$arrayid=explode("@", $name);
$arrayprice=explode('@',$price);
$arraycount=explode('@', $counts);
?>
<form method="post" action="">
<table border='1'  align="center">
<tr>
<td class="STYLE1">商品名称</td>
<td>价格</td>
<td>数量</td>
<td>金额</td>
</tr>
<?php
for($i=0;$i<count($arrayid);$i++){
    echo '<tr>';
    echo '<td>'.$arrayid[$i].'</td>';
    echo '<td>'.$arrayprice[$i].'</td>';
    echo '<td>';
    echo '<input type="text" name="count'.$i.'"';
    echo 'value='.$arraycount[$i].'>';
    echo '<input type="submit" name="modifyNum'.$i.'" value=';
    echo "'更改'>";
    echo '</td>';
    echo '<td>'.$arrayprice[$i]*$arraycount[$i].'</td>';
    echo '</tr>';
}
?>
</table>
</form>
<?php
for($i=0;$i<count($arrayid);$i++){
	if($_POST[modifyNum])
	{}
}

?>