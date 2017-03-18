<table>
<?php

	$dbms='mysql';
	$host='localhost';
	$user='root';
	$pass='';
    $dbname='pdosql';
	$dsn="$dbms:host=$host;dbname=$dbname";
	
	try {
		$pdo=new PDO($dsn,$user,$pass);
		//echo 'PDO连接数据库成功';
		//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);//警告模式
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//异常模式
	$query="select * from pdomysql";	
	$result=$pdo->prepare($query);	
	$result->execute();	
	$code=$result->errorCode();	
	while($res=$result->fetch(PDO::FETCH_ASSOC)){
?>
<tr>
	<td><?php echo $res['id'];?></td>
	<td><?php echo $res['pdo'];?></td>
	<td><?php echo $res['basename'];?></td>
	<td><?php echo $res['createtime'];?></td>
</tr>
<?php
	}	
        
    if($code=="00000"){//没有错误的时候$code=="00000"和empty不是一回事儿
    //if(empty($code)){
    	echo '数据库显示成功';
    }else{
    	echo '数据库显示错误:'."<br>";
    	echo "SQL query:".$query;
    	echo '<pre>';
    	var_dump($result->errorInfo());
    	echo '</pre>';
    }
    } 
    catch (Exception $e){
		echo "PDO Exception Caught:Error with the database<br/>";
		echo "SQL query:".$query;
		echo '<pre>';
		echo "Error:".$e->getMessage()."<br>";
		echo "Code:".$e->getCode()."<br>";
		echo "File:".$e->getFile()."<br>";
		echo "Line:".$e->getLine()."<br>";
		echo "Trace:".$e->getTraceAsString()."<br>";
		echo '</pre>';
	}

?>
</table>