<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>continue����Ӧ��</title>
</head>

<body>
<script language="javascript">
	var str="20���ڵ�ż���У�";		//�������str
	var i=1;							//�������i
	while(i<20){						//Ӧ��while��䣬����ѭ������Ϊi<10
	   if(i%2!=0){					    //�������i�ܱ�2��������ִ����������
			i++;				    	//���˳�����ѭ��֮ǰʹ����i��ֵ�ۼ�1�����ȱ�ٸ���佫������ѭ��
			continue;					//����continue���
		}
		str=str+i+" ";					//ƴ���ַ���str���Ի�ȡ����i��ֵ
		i++;							//ʹ����i��ֵ�ۼ�1������䲻��ȱ��
	}
	document.write(str);				//�������str��ֵ
</script>
</body>
</html>
