// JavaScript Document
   	
function showHint(str,num){
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new AcitveXObject("Microsoft.XMLHTTP");	
	}
	xmlhttp.open("GET","php/docourse.php?col="+str+"&page="+num,true);
	xmlhttp.send();
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("rows").innerHTML = xmlhttp.responseText;
		}	
	}	
}