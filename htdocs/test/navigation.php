
<form>
<table>
<tr>
<table align="center" width="761" height="20" border="0">
	<tr>
		<td><a href="navigation.php">首&nbsp;页</a></td>
		<td><a href="#" width="75" onMouseMove="Lmenu('新品')">新品上架</a></td>
		<td><a href="#" width="75" onMouseMove="Lmenu('购物')">购物车</a></td>
		<td><a href="#" width="75" onMouseMove="Lmenu('会员')">会员中心</a></td>
		<td><a href="navigation.php" width="75">在线帮助</a></td>
	</tr>
	</table>
	</tr>
	<tr>
		<td width="535" align="right"> <div id="submenu" class="word_yellow" >&nbsp;&nbsp;</div> </td>
       <script type="text/javascript">
	function Lmenu(value){
		switch(value){
		case "新品":
            submenu.innerHTML="<a href='#'>商品展示</a>|<a href='#'>销售排行榜</a>|<a href='#'>商品查询</a>";
		break;

		case "购物":
            submenu.innerHTML="<a href='#'>添加商品</a>|<a href='#'>移除指定商品</a>|<a href='#'>清空购物车</a>|<a href='#'>查询购物车</a>|<a href='#'>填写订单信息</a>";
		break;
       case "会员":
            submenu.innerHTML="<a href='#'>注册会员</a>|<a href='#'>修改会员</a>|<a href='#'>账户查询</a>";
		break;
       }
	}
</script>
	</tr>

</table>
</form>


