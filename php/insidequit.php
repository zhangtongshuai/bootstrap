<?php
	session_start();
	$_SESSION=array();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>系统登录页面</title>
<link rel="stylesheet" type="text/css" href="../css/insidelogon.css">
</head>
<body class="no-skin">
<div class="error-container"> 
	<h1> 信息提示 </h1> 
	<div class="errorcon"> 
    <form action="doinside.php" method="post"  id="form" onSubmit="return submitInside()">
		账号：<input type="text" name="user" placeholder="请输入账户名"><br/>
        密码：<input type="password" name="password" placeholder="请输入密码"><br/>
        <input type="submit" value="登录" id="denglu"><input type="reset" value="重置" id="chongzhi">
    </form>
	</div>
</div>
<script src="../js/inside.js"></script>
</body>
</html>
