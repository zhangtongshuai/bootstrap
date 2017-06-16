// JavaScript Document
	function submitIndex()
	{
		var oForm = document.getElementById("form");
		var oStr1 =oForm.user.value;
		if(oStr1=='')
		{
			alert("*用户名不能为空");
			return false;
		}else{
				var re =/^[a-zA-Z]\w{5,14}$/;
				if(!re.test(oStr1))
				{
				alert("* 用户名必须是字母开头的6-15位");
				return false;
				};
		};
		var oStr2 = oForm.passwd1.value;
		if(oStr2=='')
		{
			alert("密码不能为空");
			return false;
		}else{
				var re =/^[a-zA-Z\d_]{6,12}$/;
				if(!re.test(oStr2))
				{
				alert("* 请输入6-12位密码");
				return false;
				};
		
		};
		var oStr3 =oForm.passwd2.value;
		if(oStr3=='')
		{
			alert("*确认密码不能为空");
			return false;
		}else{	
			if(oStr3!==oStr2)
			{
				alert("*密码再次输入不一致");
				return false;
			};
		};
		var oStr4 = oForm.email.value;
		if(oStr4=='')
		{
			alert("*邮箱不能为空");
			return false;
		}else{
			var re=/\w+\@\w+\.\w+/;
			if(!re.test(oStr4))
			{
				alert("*请输入带@号格式的邮箱");
				return false;
			};
		};
		var oStr5 =oForm.telephone.value;
		if(oStr5=='')
		{
			alert("*电话号码不能为空");
			return false;
		}else{
				var re =/^1(3|4|5|7|8)\d{9}$/;
				if(!re.test(oStr5))
				{
				alert("* 请输入11位正确的手机号码");
				return false;
				};
		};
		var oStr6 =oForm.xieyi.checked;
		if(!oStr6)
		{
			alert("* 请同意用户协议");
			return false;
		};		
	return true;
	};