// JavaScript Document
function submitInside(){
	var oForm = document.getElementById("form");
	
	if(oForm.user.value==''){
		alert("用户名不能为空");
		return false;
	};
	if(oForm.password.value==''){
		alert("密码不能为空");
		return false;
	};
	alert(oForm.user.value)
	return true;
};