<?php
//���ݿ�������
class ConnDB{
	var $dbtype;
	var $host;
    var $user;
    var $pwd;
    var $dbname;
    var $conn;    
    function ConnDB($dbtype,$host,$user,$pwd,$dbname){		//���췽����Ϊ��Ա������ֵ
		$this->dbtype=$dbtype;
    	$this->host=$host;
		$this->user=$user;
		$this->pwd=$pwd;
		$this->dbname=$dbname;
	}
    function GetConnId(){		    						//ʵ�������ݿ�����Ӳ��������Ӷ���
		$this->conn=mysql_connect($this->host,$this->user,$this->pwd) or die("���ݿ���������Ӵ���".mysql_error());
    	mysql_select_db($this->dbname,$this->conn) or die("���ݿ���ʴ���".mysql_error());
    	mysql_query("set names gb2312");					//�������ݿ�ı����ʽ
    	return $this->conn;									//�������Ӷ���
    }
	function CloseConnId(){									//����ر����ݿ�ķ���
    		$this->conn->Disconnect();					//ִ�йرյĲ���
    }
}	

//���ݿ������
class AdminDB{
	function ExecSQL($sqlstr,$conn){					//���巽��������ΪSQl�����������ݿⷵ�صĶ���
		$sqltype=strtolower(substr(trim($sqlstr),0,6));	//��ȡSQL�е�ǰ6���ַ�������ת����Сд
		$rs=mysql_query($sqlstr);					//ִ��SQL���
		if($sqltype=="select"){						//�ж����SQL��������ΪSELECT
			$array=mysql_fetch_array($rs);				//ִ�и���䣬��ȡ��ѯ���
			if(count($array)==0 || $rs==false)			//�ж�����Ƿ�ִ�гɹ�
				return false;					//�����ѯ���Ϊ0������ִ��ʧ�ܣ��򷵻�false
			else
				return $array;					//���򷵻ز�ѯ���������
		}elseif ($sqltype=="update" || $sqltype=="insert" || $sqltype=="delete"){
			//�ж����SQL������Ͳ�Ϊselect����ִ�����²���
			if($rs)
			    return true;						//ִ�гɹ�����true
			else 
			    return false;    					//�Ƿ񷵻�false
		}
	}
}


//��ҳ��
class SepPage{
	var $rs;
	var $pagesize;					//����ÿҳ��ʾ�ļ�¼��
	var $nowpage;					//��ǰҳ��
	var $array;
	var $conn;
	var $sqlstr;					//ִ�е�SQL���
	var $total;
	var $pagecount;					//�ܵļ�¼��
	function ShowDate($sqlstr,$conn,$pagesize,$nowpage){	//���巽��
		$arrays=array();
		$array_title=array();
		$array_content=array();
		if(!isset($nowpage) || $nowpage=="" || $nowpage==0)			//�жϵ�ǰҳ����ֵ�Ƿ�Ϊ��
			$this->nowpage=1;						//���嵱ǰҳ��ֵ
		else
			$this->nowpage=$nowpage;				//��ȡ��ǰҳ��ֵ
		
		$this->pagesize=$pagesize;					//����ÿҳ����ļ�¼��
		$this->conn=$conn;							//�������ݿⷵ�صı�ʶ
		$this->sqlstr=$sqlstr;						//ִ�еĲ�ѯ���
		$this->pagecount=$pagecount;				//�ܵļ�¼��
		$this->total=$total;						//�ܵļ�¼��
		
		$this->rs=mysql_query($this->sqlstr."limit ".$this->pagesize*($this->nowpage-1).",$this->pagesize",$this->conn);
		$this->total=mysql_num_rows($this->rs);			//��ȡ��¼��
  		if($this->total==0){									//�ж������ѯ���Ϊ0���������������
			return false;	  
	   }else{								//����
	   		if(($this->total % $this->pagesize)==0){			//�ж�����ܵļ�¼������ÿҳ��ʾ�ļ�¼������0
		  		$this->pagecount=intval($this->total/$this->pagesize);	//��Ϊ����pagecount��ֵ
			}else if($this->total<=$this->pagesize){
				$this->pagecount=1;//�����ѯ���С�ڵ���ÿҳ��¼������ôΪ������ֵΪ1	
		  	}else{
		     	$this->pagecount=ceil($this->total/$this->pagesize);	//�����������ֵ
		  	}
			while($this->array=mysql_fetch_array($this->rs)){
				array_push($array_title,$this->array[title]);
				array_push($array_content,$this->array[content]);
			}			
			array_push($arrays,$array_title,$array_content);
			return $arrays;
		}
	}
	function ShowPage($contentname,$utits,$anothersearchstr,$class){
		$allrs=mysql_query($this->sqlstr,$this->conn);		//ִ�в�ѯ���
		$record=mysql_num_rows($allrs);
		$pagecount=ceil($record/$this->pagesize);		//���㹲�м�ҳ
		$str.="����".$contentname."&nbsp;".$record."&nbsp;".$utits."&nbsp;ÿҳ��ʾ&nbsp;".$this->pagesize."&nbsp;".$utits."&nbsp;��&nbsp;".$this->nowpage."&nbsp;ҳ/��&nbsp;".$pagecount."&nbsp;ҳ";
		$str.="&nbsp;&nbsp;&nbsp;&nbsp;";
		$str.="<a href=".$_SERVER['PHP_SELF']."?page=1".$anothersearchstr." class=".$class.">��ҳ</a>";
		$str.="&nbsp;";
		if(($this->nowpage-1)<=0){ 
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=1".$anothersearchstr." class=".$class.">��һҳ</a>";
		}else{
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".($this->nowpage-1).$anothersearchstr." class=".$class.">��һҳ</a>";
		}
		$str.="&nbsp;";	
		if(($this->nowpage+1)>=$pagecount){
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".$pagecount.$anothersearchstr." class=".$class.">��һҳ</a>";
		}else{
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".($this->nowpage+1).$anothersearchstr." class=".$class.">��һҳ</a>";
		}
		$str.="&nbsp;";
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".$pagecount.$anothersearchstr." class=".$class.">βҳ</a>";
		if(count($this->array)==0 || $this->rs==false)			
			return "";
		else
		    return $str;	
	}
}
//ϵͳ���÷���
class UseFun{
	
	function chinesesubstr($str,$start,$len) { 
    $strlen=$start+$len; 
    for($i=0;$i<$strlen;$i++) { 
        if(ord(substr($str,$i,1))>0xa0) { 
            $tmpstr.=substr($str,$i,2); 
            $i++; 
         } 
		else 
            $tmpstr.=substr($str,$i,1); 
    } 
    return $tmpstr; 
}
	
}

?>