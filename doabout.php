<?php
	include "php/config.php";
	
	$conn = new mysqli($servername,$serveruser,$serverpass,$mydb);
	if($conn->connect_error)
	{
		die("链接失败");
	};
	
	$showkey ="";
	if($_GET["showid"]==NULL)
	{
		$msg ="您查找的文章不存在!";
		$jupurl ="index.php";
		include "tips.php";
		exit;
	}else{
		$showid =$_GET["showid"];	
	};
	include "header.php";
	$sql = "SELECT * FROM article where Id=$showid";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){	
?>
	<div class="projects-header page-header w1140">
       <h2><?php echo $row['Title']; ?></h2>
       <p>发布日期：<?php echo $row['ReleaseDate']; ?></p>
    </div>
	<div class="textIndet w1140">
    	
    <?php
    	echo $row["Content"];	
		$showkey = $row['KeyWord'];	
		}
	}else{
		
		echo "你查找的文章不存在或已被删除！";
	}
	$key = "SELECT * FROM article where KeyWord = '$showkey' and Id!=$showid order by ReleaseDate desc";
	$keyresult = $conn->query($key);
	if($keyresult->num_rows>0){
		
	?>
		<div class="list-group">
          <a class="list-group-item list-group-item-success">
            相关文章
          </a>
          <?php 
		  	while($krow = $keyresult->fetch_assoc()){ 
		  ?>
          <a href="http://www.webp.com/doabout.php?showid=<?php echo $krow['Id']; ?>" class="list-group-item"><span class="glyphicon glyphicon-star-empty"></span><?php echo $krow['Title']; ?></a>
<?php
		};
	};
?>
        </div>       
    </div>
<?php
	include "footer.php";
?>