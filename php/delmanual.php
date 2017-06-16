<?php
	include "config.php";
	$conn = new mysqli($servername,$serveruser,$serverpass,$mydb);
	if($conn->connect_error){
		die("链接失败");
	};
	$msg = "";
	$id = $_GET['id'];
	$sql = "DELETE FROM article where Id = '$id'";
	if($conn->query($sql)){
		$msg ="删除成功!";
		$jupurl = "domanual.php";
		include "../tips.php";
		exit;
	};	
?>