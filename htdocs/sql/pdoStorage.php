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
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);//警告模式
		//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//异常模式
	$query="select * from pdomysqls";	
	$result=$pdo->query($query);	
	
	$code=$pdo->errorCode();	
	foreach($result as $items){
?>
<tr>
	<td><?php echo $items['id'];?></td>
	<td><?php echo $items['pdo'];?></td>
	<td><?php echo $items['basename'];?></td>
	<td><?php echo $items['createtime'];?></td>
</tr>
<?php
	}	
        
    if($code=="00000"){//没有错误的时候$code=="00000"和empty不是一回事儿
    //if(empty($code)){
    	echo '数据库显示成功';
    }else{
    	echo "errorCode:".$code;
    	echo '数据库显示错误:'."<br>";
    	echo "SQL query:".$query;
    	echo '<pre>';
    	var_dump($pdo->errorInfo());
    	//print_r($pdo->errorInfo());
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