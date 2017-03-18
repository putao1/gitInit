<?php
 /** * * @version $Id: index.php * @package * @author www.jb51.net * @action 显示实例程序 */ 
include_once("./Smarty/Smarty.class.php"); //包含smarty类文件

$smarty = new Smarty(); //建立smarty实例对象$smarty $smarty->templates("./templates"); //设置模板目录 $smarty->templates_c("./templates_c"); //设置编译目录 $smarty->cache("./cache"); //缓存目录 $smarty->cache_lifetime = 0; //缓存时间 $smarty->caching = true; //缓存方式
$smarty->left_delimiter = "{#"; $smarty->right_delimiter = "#}"; $smarty->assign("name", "zaocha"); //进行模板变量替换 $smarty->display("index.htm"); //编译并显示位于./templates下的index.htm模板 ?>