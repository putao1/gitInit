<?php
function fileOperate($filename){
	if(is_file($filename)){
		$arrFile=array(
                "文件名字"=>$filename,
			    "文件大小"=>filesize($filename)."字节",
			    "文件路径"=>realpath($filename),
				"创建时间"=>date("Y-m-d h:i:s",filectime($filename)),
				"修改时间"=>date("Y-m-d h:i:s",filemtime($filename)),
				"路径信息"=>pathinfo($filename)
			);
		
	}
	return $arrFile;//返回值为一个数组
}
date_default_timezone_set('Asia/Hong_Kong');
$filename='song.txt';
print_r(fileOperate($filename));
print_r(stat($filename));
?>