<?php
	header('Content-type:text/html;charset=utf-8;');
	include "config.php";
	$title = $_POST["title"];
	$column = $_POST["column"];
	$describe = $_POST["describe"];
	$keyword = $_POST["keyword"];
	$releasedate = date("Y-m-d H:i:s");
	$content= $_POST["editorValue"];
	$thumbnail = "";
	$msg="";
	
	if($_FILES["upfile"]["name"]!=""){
		$myImg = $_FILES["upfile"]["name"];	
		$myarr = explode(".",$myImg);
		$mytype = array_pop($myarr);
		$myname = date("Y").date("m").date("d").date("H").date("i").date("s").rand(0,9).".".$mytype;
		move_uploaded_file($_FILES["upfile"]["tmp_name"],"../upload/".$myname);
		$thumbnail = "upload/".$myname;	
	};
	$conn = new mysqli($servername,$serveruser,$serverpass,$mydb);
	if($conn->connect_error)
	{
		die("链接数据库失败".$conn->connect_error);
	};
	$sql = "INSERT INTO article(Title,s_Column,s_Describe,ReleaseDate,KeyWord,Content,Thumbnail)  VALUES('$title','$column','$describe','$releasedate','$keyword','$content','$thumbnail')";
	
	if(mysqli_query($conn,$sql)){
		$msg = "插入数据成功！";
		$jupurl = "manual.php";
		include "../tips.php";
		exit;
	}else{
		echo "插入失败".mysqli_error($conn);	
	}
	
?>