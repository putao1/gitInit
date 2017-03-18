<script type="text/javascript" language="javascript">
	for(i=1;i<9;i++){
		document.write(i+"*"+i+"="+i*i+" ");
	}
	//<br>
	var str="20以内的偶数有:";
	for(i=0;i<=20;i++){
		if(i%2!=0){
			i++;
			continue;
		}
         str=str+i+" ";
		//document.write(i+"-");
		i++;
	}
	document.write(str);
</script>