<?php
	header('Content-type: text/html;charset=GB2312');		//ָ���������ݵı����ʽΪGB2312
	$link=mysql_connect("localhost","root","root");
	mysql_select_db("db_database23",$link);
	$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE',$RequestAjaxString);		//Ajax������encodeURIComponent��Ҫ�ύ�����Ľ��б���
	mysql_query("set names gb2312");
	$type=$_GET[type];
	//$sql=mysql_query("select * from tb_type where type='".iconv('UTF-8','gb2312',$type)."'");	//�ڻ���������ʹ��
	$sql=mysql_query("select * from tb_type where type='".$type."'");

	$result=mysql_fetch_array($sql);
?>
<select name="typeID" id="typeID">
  <?php
do{
?>
  <option value="<?php echo $result[subtype];?>"><?php echo $result[subtype];?></option>
  <?php
}while($result=mysql_fetch_array($sql));
?>
</select>
