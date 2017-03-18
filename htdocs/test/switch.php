<!DOCTYPE html>
<html>
<head>
	<title>"新春购物送大礼"</title>
</head>
<body>
<map name="Map" id="Map">
<area shape="rect" coords="9,92,65,113" href="#"/>
<area shape="rect" coords="78,89,131,115" href="switch.php?lmbs=<?php echo urlencode("最新商品");?>"/>
<area shape="rect" coords="145,92,201,114" href="switch.php?lmbs=<?php echo urlencode("热门商品");?>"/>
<?php
    switch($_GET['lmbs']){
      case '最新商品':
      	//include "new.php";
        echo "最新商品";
      	break;
      case '热门商品':
      	echo "热门商品";
      	break;
      default:
        echo "默认商品";
        break;
    }
?>



</body>
</html>