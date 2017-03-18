<?php
/**
* 
*/
class secChoose
{
	var $method;
	var $str;
	function secAlgorithm($method,$str){
		$this->method=strtolower(trim($method));
		$this->str=$str;
		switch($this->method){
        	case 'md5':
        		return md5($this->str);
        		break;
        	case 'crypt':
        	    return crypt($this->str,'qi');
        	    break;
            case 'sha1':
                return sha1($this->str);
                break;
            default:
                return $this->str;
                break;
		}
		
	}
}
?>