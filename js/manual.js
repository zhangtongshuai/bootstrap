// JavaScript Document
	function submitManual(){
		var oForm = document.getElementById("form");
		var cont = document.getElementsByName("editorValue");
		if(oForm.title.value==''){
			alert("标题不能为空");
			return false;
		};
		if(oForm.describe.value==''){
			alert("描述不能为空");
			return false;
		};
		if(oForm.keyword.value==''){
			alert("关键词不能为空");
			return false;
		};
		if(cont[0].value=="" || cont[0].value=="<p>请添加文章内容……</p>"){
			alert("内容不能为空");
			return false;
		};
		if(oForm.upfile.value==''){
			alert("缩略图不能为空");
			return false;
		};
	return true;
	};