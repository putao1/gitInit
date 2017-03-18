<form method="post" action="" name="form1">
<span>请选择喜欢的图书分类：</span>
<input type="radio" name="books" value="生活类" onclick="check(this.value);">生活类
<input type="radio" name="books" value="科幻类" onclick="check(this.value);">科幻类
<input type="radio" name="books" value="编程类" onclick="check(this.value);">编程类
<input type="radio" name="books" value="小说类" onclick="check(this.value);">小说类

</form>

<script type="text/javascript" language="javascript">
	function check(book){//此处函数的参数 不必声明
            switch(book){
            	case "生活类":
            	    alert("您喜欢的图书是:"+book);
            	    break;
            	case "科幻类":
            	    alert("您喜欢的图书是:"+book);
            	    break;
            	case "编程类":
            	    alert("您喜欢的图书是:"+book);
            	    break;
                case "小说类":
            	    alert("您喜欢的图书是:"+book);
            	    break;
            	default :
            	    
            	    break;

            }
	}

</script>