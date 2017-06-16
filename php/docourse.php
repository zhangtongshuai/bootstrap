<?php
	include "config.php";
	$conn = new mysqli($servername,$serveruser,$serverpass,$mydb);
	if($conn->connect_error){
		die("链接失败");
	}
	$page = $_GET['page'];
	$page_size=4;
	$num = $page*$page_size;

	$col = $_GET['col'];
	if($col=="全部课程"){
		$sql = "SELECT * FROM article limit $num,$page_size "; 
		$qsql = "SELECT * FROM article";
	}else{
		$sql = "SELECT * FROM article where s_Column='$col'  limit $num,$page_size ";
		$qsql = "SELECT * FROM article where s_Column='$col'";	
	}
	$result = $conn->query($sql);
	$qresult=$conn->query($qsql);
	
	$max_num = ceil(($qresult->num_rows)/4);  
	if($result->num_rows>0){
?>
	<div class="row">
<?php
		while($row=$result->fetch_assoc()){
?>
<div class="col-lg-3">
    <a href="http://www.webp.com/doabout.php?showid=<?php echo $row['Id']; ?>" class="thumbnail">
        <img class="lazy" src="<?php echo $row['Thumbnail']; ?>" data-src="<?php echo $row['s_thumb']; ?>" width="100%" style="height:150px" alt="<?php echo $row['Title']; ?>" >
    </a>
</div>
<?php
			}
	}else{
		echo "该栏目下没有内容！";	
	}
	
?>
</div>
<nav>
  <ul class="pager">
    <li class="previous"><a href="javascript:showHint('<?php echo $col;?>',<?php if($page-1<=0){echo 0;}else{echo $page-1;} ?>)">&larr; Older</a></li>
    <li class="next"><a href="javascript:showHint('<?php echo $col;?>',<?php if($page+1>=$max_num){echo $page;}else{echo $page+1;}; ?>)">Newer &rarr;</a></li>
  </ul>
</nav>
