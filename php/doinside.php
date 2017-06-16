<?php
	session_start();
	include "config.php";	
	$user = $_POST["user"];
	//echo $user;
	//exit;
	$pass = $_POST["password"];
	$logondate = date("Y-m-d H:i:s");
	$msg = "";
	$conn = new mysqli($servername,$serveruser,$serverpass,$mydb);
	if($conn->connect_error)
	{
		die("连接数据库失败").$conn->connect_error;
	};
	
	$sql = "SELECT * FROM inside where user = '$user'";
	
	$usql = "UPDATE inside SET LatestLogonTime='$logondate' where user = '$user'";
	
	$result = $conn->query($sql);
	if($result ->num_rows >0)
	{ 
		while($row = $result->fetch_assoc())
		{
			if($row["password"]==$pass)
			{
				$msg ="登录成功!";
				$jupurl = "manual.php";
				$_SESSION["user"]=$user;
			 	$conn->query($usql);
				include "../tips.php";
				exit;
			}else{
				$msg ="您输入的密码错误";
				$jupurl = "insidelogon.php";
				include "../tips.php";
				exit;
			};			
		};
	}else{
		$msg ="您输入的用户名不存在";	
		$jupurl = "insidelogon.php";
		include "../tips.php";
		exit;
	};
	
	
?>