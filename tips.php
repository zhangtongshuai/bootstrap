<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>提示信息</title>
<style type="text/css">
*{ margin:0px; padding:0px;}
.error-container{ background:#fff; border:1px solid #eaeaea;  text-align:center; width:450px;font-family:Microsoft Yahei; padding-bottom:30px; border-top-left-radius:5px; border-top-right-radius:5px; position:absolute; top:50%; left:50%; margin:-150px 0 0 -225px;}
.error-container h1{ font-size:16px; padding:12px 0; background:#303030; color:#fff;} 
.errorcon{ padding:35px 0; text-align:center; color:#f00; font-size:18px;}
.errorcon i{ display:block; margin:12px auto; font-size:30px; }
.errorcon span{color:red;}
h4{ font-size:14px; color:#666;}
a{color:#f00;}
</style>
</head>
<body class="no-skin">
<div class="error-container"> 
	<h1> 信息提示 </h1> 
	<div class="errorcon"> 
		<?php echo $msg; ?>
	</div>
	<h4 class="smaller">页面自动 <a id="href" href="<?php echo $jupurl; ?>">跳转</a> 等待时间： <b id="wait">9</b></h4>
   
</div>
<script>
window.onload = function(){
	var href = document.getElementById("href").href;
	var wait = document.getElementById("wait");
	setInterval(function(){
		wait.innerHTML--;
		if(wait.innerHTML<=0){
			window.location = href;  // 跳转
		}
	},1000);	
}

</script>
</body>
</html>
