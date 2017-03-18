<?php

header("Content-Type:text/html;charset=utf-8");
$dbms='mysql';
$host='127.0.0.1';
$dbname='notice';
$user='root';
$pwd='';
$dsn="$dbms:host=$host;dbname=$dbname";
try{
    $pdo=new PDO($dsn,$user,$pwd);
    $query='select * from pdo order by id desc';
    //$result=$pdo->query($query);
    //echo "PDO连接MSQL成功";
    $result=$pdo->prepare($query);
    $result->execute();
    $row=$result->fetch(PDO::FETCH_ASSOC);
?>
<table align="center" cellspadding="0" cellspacing="0" border="1">
<tr bgcolor="#f0f0f0">
	<td>id</td>
	<td>pdo</td>
	<td>database</td>
	<td align="center">createtime</td>
	<td>操作</td>
</tr>
<?php
do{


?>
<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['pdo'];?></td>
	<td><?php echo $row['database'];?></td>
	<td><?php echo $row['createtime'];?></td>
	<td><a href="#">删除</a></td>
</tr>
<?php
}while($row=$result->fetch(PDO::FETCH_ASSOC));
?>
</table>
<?php
}catch(Exception $e){
  // echo $e->getMessage()."<br>";
	die("Error!:".$e->getMessage()."<br>");
}

?>