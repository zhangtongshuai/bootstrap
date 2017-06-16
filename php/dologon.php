<?php
	session_start();
	include "config.php";	
	$user = $_POST["user"];
	$pass = $_POST["password"];
	$msg = "";
	$conn = new mysqli($servername,$serveruser,$serverpass,$mydb);
	if($conn->connect_error)
	{
		die("连接数据库失败").$conn->connect_error;
	};
	
	$sql = "SELECT * FROM user_info where username = '$user'";
	$result = $conn->query($sql);
	if($result ->num_rows >0)
	{ 
		while($row = $result->fetch_assoc())
		{
			if($row["password"]==$pass)
			{
				$msg ="登录成功!";
				$jupurl = "../index.php";
				$_SESSION["user"]=$user;
				include "../tips.php";
				exit;
			}else{
				$msg ="您输入的密码错误";
				$jupurl = "../logon.php";
				include "../tips.php";
				exit;
			};			
		};
	}else{
		$msg ="您输入的用户名不存在";	
		$jupurl = "../logon.php";
		include "../tips.php";
		exit;
	};
	
	
?>