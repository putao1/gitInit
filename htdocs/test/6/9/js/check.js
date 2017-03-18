function checkregtel(regtel){
	var str=regtel;
	var Expression=/^13(\d{9})$|^18(\d{9})$|^15(\d{9})$/;
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}
function checkregtels(regtels){
	var str=regtels;
	var Expression=/^(\d{3}-)(\d{8})$|^(\d{4}-)(\d{7})$|^(\d{4}-)(\d{8})$/;
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}
function checkregemail(emails){
	var str=emails;
	var Expression=/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}

function chkreg(form,label){
  if(label==0 || label=="all"){
   	 if(form.recuser.value==""){
	   check_recuser.innerHTML="username cant be blank";
	   form.recuser.style.backgroundColor="#F1B000";
	   return false;
   	 }else{
   	   check_recuser.innerHTML="";
	   form.recuser.style.backgroundColor="#FFFFFF";
   	 }
   }


  if(label==1 || label=="all"){
   	 if(form.address.value==""){
	   check_address.innerHTML="address cant be blank";
	   form.address.style.backgroundColor="#F1B000";
	   return false;
   	 }else{
   	   check_address.innerHTML="";
	   form.address.style.backgroundColor="#FFFFFF";
   	 }
   }


 if(label==2 || label=="all"){
   	 if(form.postalcode.value==""){
	   check_postalcode.innerHTML="邮政编码不能为空¡";
	   form.postalcode.style.backgroundColor="#F1B000";
	   return false;
   	 }else if(isNaN(form.postalcode.value)){
   	   check_postalcode.innerHTML="邮政编码 is NaN¡";
	   form.postalcode.style.backgroundColor="#F1B000";
	   return false;
	 }else if(form.postalcode.value.length!=6){
   	   check_postalcode.innerHTML="Post code length !=6";
	   form.postalcode.style.backgroundColor="#F1B000";
	   return false;
   	 }else{
   	   check_postalcode.innerHTML="";
	   form.postalcode.style.backgroundColor="#FFFFFF";
   	 }
   }


   if(label==3 || label=="all"){
   	 if(form.qq.value==""){
	   check_qq.innerHTML="qq不能为空";
	   form.qq.style.backgroundColor="#F1B000";
	   return false;
   	 }else if(isNaN(form.qq.value)){
   	   check_qq.innerHTML="QQ is NaN¡";
	   form.qq.style.backgroundColor="#F1B000";
	   return false;
   	 }else{
   	   check_qq.innerHTML="";
	   form.qq.style.backgroundColor="#FFFFFF";
   	 }
   }

  if(label==4 || label=="all"){
   	 if(form.email.value==""){
	   check_email.innerHTML="email cant be blank";
	   form.email.style.backgroundColor="#F1B000";
	   return false;
   	 }else if(!checkregemail(form.email.value)){
	   		check_email.innerHTML="email not leagle";
	   		form.email.style.backgroundColor="#F1B000";
	   		return false;
	   }else{
	   	  check_email.innerHTML="";
	      form.email.style.backgroundColor="#FFFFFF";
	   }
   }

  if(label==5 || label=="all"){
		if(form.mtel.value==""){
	   		check_mtel.innerHTML="mobile tel cant be blank";
	   		form.mtel.style.backgroundColor="#F1B000";
	   		return false;
   	 	}else if(!checkregtel(form.mtel.value)){
	   		check_mtel.innerHTML="mobile tel is illeagle";
	   		form.mtel.style.backgroundColor="#F1B000";
	   		return false;
   	 	}else if(isNaN(form.mtel.value)){
   	   		check_mtel.innerHTML="mobile tel is NaN¡";
	   		form.mtel.style.backgroundColor="#F1B000";
	   		return false;
   	 	}else{
   	   		check_mtel.innerHTML="";
	   		form.mtel.style.backgroundColor="#FFFFFF";
   	 	}
   	}


   if(label==6 || label=="all"){
		if(form.gtel.value==""){
	   		check_gtel.innerHTML="fixed tel cant be blank";
	   		form.gtel.style.backgroundColor="#F1B000";
	   		return false;
   	 	}else if(!checkregtels(form.gtel.value)){
	   		check_gtel.innerHTML="fixed tel illeagle";
	   		form.gtel.style.backgroundColor="#F1B000";
	   		return false;
   	 	}else{
   	   		check_gtel.innerHTML="";
	   		form.gtel.style.backgroundColor="#FFFFFF";
   	 	}
   	}


   }


