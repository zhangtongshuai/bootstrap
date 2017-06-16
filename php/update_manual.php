<?php
	include "config.php";
	$id = $_GET['id'];
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
	
	if($thumbnail == ""){
		$sql = "update article set Title='$title',s_Column='$column',s_Describe='$describe',KeyWord='$keyword',Content='$content' where Id='$id'";	
	}else{
		$sql = "update article set Title='$title',s_Column='$column',s_Describe='$describe',KeyWord='$keyword',Content='$content',Thumbnail='$thumbnail' where Id='$id'";	
	};
	if($conn->query($sql)){
		$msg ="修改成功!";
		$jupurl = "domanual.php";
		include "../tips.php";
		exit;
	}
	
	
?>