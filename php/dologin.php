<?php
	include "config.php";
	header('Content-type:text/html;charset=utf-8;');
	$conn = new mysqli($servername,$serveruser,$serverpass,$mydb);
	if($conn->connect_error){
		die("链接数据库失败：".$conn->connect_error);
	}
	$uname=$_POST["user"];
	$userpass=$_POST["passwd1"];
	$useremail =$_POST["email"];
	$userphone = $_POST["telephone"];
	$userarea = $_POST["area"];
	$usersex = $_POST["sex"];
	$userhobby = $_POST["hobby"]; 
	$str="";
	for($i=0; $i<count($userhobby); $i++){
		$str.=$userhobby[$i].'|';
	}
	$sql1 = "SELECT username FROM user_info";
	$result = $conn->query($sql1);
	if($result->num_rows >0)
	{
		while($row= $result->fetch_assoc())
		{
			if($row['username']==$uname)
			{
				exit("用户名已经存在!");
			};
		};
	};
	
	
	$sql = "INSERT INTO user_info(username,password,email,telephone,area,sex,hobby) VALUES ('$uname','$userpass','$useremail','$userphone','$userarea','$usersex','$str')";
	// INSERT INTO 表名(表的字段) VALUES (各字段对应的值) 
	if(mysqli_query($conn,$sql)){
		echo "插入数据成功";
	}else{
		echo "插入数据失败：".mysqli_error($conn);	
	}


?>