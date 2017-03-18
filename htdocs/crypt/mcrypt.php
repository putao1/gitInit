<?php
$en_arr=mcrypt_list_algorithms();
echo 'mcrypt支持的加密算法数组有:';
foreach ($en_arr as $value) {
	echo $value." ";
}

$en_mo=mcrypt_list_modes();
echo "<br>mcrypt支持的加密算法模式有:";
foreach ($en_mo as $value) {
	echo $value." ";
}

$str="被加密的内容：春招";
$key="key:1111";
$cipher=MCRYPT_DES;
$modes=MCRYPT_MODE_ECB;
$iv=mcrypt_create_iv(mcrypt_get_iv_size($cipher, $modes),MCRYPT_RAND);
echo "<p>mcrypt双向加解密算法示例：<p>加密前:$str<p>";
$str_encrypt=mcrypt_encrypt($cipher, $key, $str, $modes,$iv);
echo "加密后:".$str_encrypt."<p>";
$str_decrypt=mcrypt_decrypt($cipher, $key, $str_encrypt, $modes,$iv);
echo "解密后:$str_decrypt";
echo "<p font-size=20px >mhash加密算法示例</p>";
$num=mhash_count();

for($i=0;$i<$num;$i++){
	echo $i."=>".mhash_get_hash_name($i)."  ";
}

$filename='test.txt';
$str=file_get_contents($filename);
$hash=2;
$password="111";
$salt="123";
$key=mhash_keygen_s2k(1, $password, $salt, 10);
$str_hash=bin2hex(mhash($hash, $str,$key));
echo "<p>文件".$filename."的校验码是:".$str_hash."(".strlen($str_hash)."位)";
?>