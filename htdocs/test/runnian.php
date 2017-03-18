<form method="post" name="form1">
请选择要检测的年份：
<select name="year">
   <?php 
    for($i=2000;$i<2020;$i++)
    	echo "<option value=$i>$i</option>";
	?>
</select>
<input type="submit" name="jiance" value="检测" onclick="check()">
</form>

<script type="text/javascript" language="javascript">
    function check(){
    	year1=form1.year.value;
    	if((year1%4==0)&&(year1%100!=0))
    		alert(year1+"是闰年");
    	else
    		alert(year1+"是平年");
    }
</script>