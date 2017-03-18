<table>
<?php
if($_POST['Submit']=="提交"&&$_POST['pdo']!=""){
	$dbms='mysql';
	$host='localhost';
	$user='root';
	$pass='';
    $dbname='pdosql';
	$dsn="$dbms:host=$host;dbname=$dbname";
	//var_dump($dsn);
	//die('dsn');
	try {
	$pdo=new PDO($dsn,$user,$pass);	//echo 'PDO连接数据库成功';
	$pdo->beginTransaction();	
	$query="insert into pdomysqls(pdo,basename,createtime)values('".$_POST['pdo']."','".$_POST['database']."','".$_POST['createtime']."')";//数据表中的 字段名称不能为database
		
    $result=$pdo->prepare($query);	
	$result->execute();
    $code=$result->errorCode();
    if($code=="00000"){//没有错误的时候$code=="00000"和empty不是一回事儿
    //if(empty($code)){
    	echo '数据库已经添加成功';
    	$pdo->commit();
    }else{
    	echo '数据库错误:'."<br>";
    	echo "SQL query:".$query;
    	echo '<pre>';
    	var_dump($result->errorInfo());
    	echo '</pre>';
    	$pdo->rollBack();
		echo '回滚完成';
    }
    
   // echo '事务成功提交';

} catch (Exception $e) {
		echo "Error:".$e->getMessage()."<br>";
		
	}
}
?>
</table>