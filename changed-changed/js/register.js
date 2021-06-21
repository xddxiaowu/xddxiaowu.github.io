function checkusername(){
	var inputOb = document.getElementsByName('username')[0];
	var v = inputOb.value;
	var re=/^[a-z_]{1}[a-z0-9_]{3,19}$/.test(v);
	var divOb = document.getElementById('m_username');
	if(re){
		divOb.innerHTML = "输入正确√";
		divOb.style.border = "1px solid green";
		divOb.style.color = "green";
		return true;
	}
	else{
		divOb.innerHTML = "输入错误×,请重新输入";
		divOb.style.border = "1px solid red";
		divOb.style.color = "red";
		return false;
	}
}


function checkemail(v){
	var re = /^[0-9a-zA-Z_.-]+[@][0-9a-zA-Z_.-]+([.][a-zA-Z]+){1,2}$/.test(v);
	var divemail = document.getElementById('m_email');
	if(re){
		divemail.innerHTML = "邮箱输入正确√";
		divemail.style.border = "1px solid green";
		divemail.style.color = "green";
	}
	else{
		divemail.innerHTML = "邮箱输入错误×，请重新输入";
		divemail.style.border = "1px solid green";
		divemail.style.color = "red";
	}

}


function checkpassword(v){
	var re = /^\S{6,20}$/.test(v);
	var divPassword = document.getElementById('m_password');
	if(re){
		divPassword.innerHTML = "密码输入正确√";
		divPassword.style.border = "1px solid green";
		divPassword.style.color = "green";
		return true;
	}
	else{
		divPassword.innerHTML = "密码输入错误×";
		divPassword.style.border = "1px solid red";
		divPassword.style.color = "red";
		return false;
	}
}


function checkrepassword(v1){
	var v = document.getElementsByName('password')[0].value;
	if(v1 != '' && v == v1 && checkpassword(v)){
		document.getElementById('m_repassword').innerHTML = "确认成功√";
		document.getElementById('m_repassword').style.color = "green";
		document.getElementById('m_repassword').style.border = "1px solid green";
		return true;
	}
	else{
		document.getElementById('m_repassword').innerHTML = "确认失败×";
		document.getElementById('m_repassword').style.color = "red";
		document.getElementById('m_repassword').style.border = "1px solid red";
		return false;
		}
}


function setusername(){
	var ob = document.getElementById('m_username');
	ob.innerHTML = "请输入4到20位由英文字母数字和下划线组成的字符串，且数字不能作为开头";
	ob.style.border = "1px solid #ccc";
	ob.style.color = "#333";
}


function setemail(){
	var ob = document.getElementById('m_email');
	ob.innerHTML = "请输入邮箱";
	ob.style.border = "1px solid #ccc";
	ob.style.color = "#333";
}

function setpassword(){
	var ob = document.getElementById('m_password');
	ob.innerHTML = "非空白字符6到20位";
	ob.style.border = "1px solid #ccc";
	ob.style.color = "#333";
}


function setrepassword(){
	var ob = document.getElementById('m_repassword');
	ob.innerHTML = "请确认密码";
	ob.style.border = "1px solid #ccc";
	ob.style.color = "#333";
}


function submitFun(){
	var formOb = document.forms[0];
	var re1 = checkusername();
	var v = document.getElementsByName('password')[0].value;
	var re2 = checkpassword(v);
	var v1 = document.getElementsByName('repassword')[0].value;
	var re3 = checkrepassword(v1);
	if (re1 && re2 && re3){
		formOb.submit();
	}
	else{
		alert("有错误,请重新输入")
	}				
}