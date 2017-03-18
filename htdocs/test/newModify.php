<?php
$name="智能机器人@数码相机@天翼3G手机@瑞士手表";
$price="14998@2588@2666@66698";
$counts="1@2@3@4";
$arrayid=explode("@", $name);
$arrayprice=explode("@", $price);
$arraycount=explode("@", $counts);
if($_POST['modify']){
   $id=$_POST['category'];
   $key=array_search($id, $arrayid);
   $num=$_POST['count'];
   $arraycount[$key]=$num;
   $counts=implode("@", $arraycount);
   //print_r($counts);
   echo $counts;
}
?>

<table border="1" align="center">
	<tr>
	<td>商品名称</td>
    <td>价&nbsp;&nbsp;格</td>
    <td>数&nbsp;&nbsp;量</td>
    <td>金&nbsp;&nbsp;额</td>
	</tr>
    <?php
    for($i=0;$i<count($arrayid);$i++){
    ?>
   <form name="form_<?php echo $i; ?>" method="post" action="">
   <tr>
    <td><?php echo $arrayid[$i]; ?></td>
    <td><?php echo $arrayprice[$i]; ?></td>
    <td align="center" >
    <input type="text" name="count" value="<?php echo $arraycount[$i]; ?>">
    <input type="hidden" name="category" value="<?php echo $arrayid[$i]; ?>">
    <input type="submit" name="modify" value="更改">	
    </td>
    <td>
        <?php echo $arrayprice[$i]*$arraycount[$i]; ?>
    </td>
    </tr>
    </form>
    <?php
    }
    ?>
</table>