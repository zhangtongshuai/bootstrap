<?php
	header('Content-type:text/html;charset=utf-8;');
	include "header.php";
	include "php/config.php";
	$listid = "";
	$csql ="";
	$page =0;
	
	if(isset($_GET['page']))// 如果存在则返回
	{
		$page = $_GET['page']-1;
	};
	if(isset($_GET['listid']))
	{
		$listid = $_GET['listid'];
	};
	switch($listid){
		case 1:
			$listid = 'Web前端开发';
			break;
		case 2:
			$listid = 'UI设计';
			break;
		case 3:
			$listid = 'PHP开发';
			break;
		case 4:
			$listid = '网络营销';
			break;
		case 5:
			$listid = 'JAVA开发';
			break;
		case 6:
			$listid = 'Jquery';
			break;
		default:
			$listid = '全部课程';
			break;
	};
	
	$conn = new mysqli($servername,$serveruser,$serverpass,$mydb);
	if($conn->connect_error){
		die("链接失败");
	};
	
	if($listid=='全部课程'){
		$csql = "SELECT * FROM article";
	}else{
		$csql = "SELECT * FROM article where s_Column='$listid'";	
	};
	
	$cresult = $conn->query($csql);
	$page_size = 3;
	$count = $cresult->num_rows;
	$num = $page*$page_size;
	
	if($listid == '全部课程'){
		$sql = "SELECT * FORM article limit $num,3";
	}else{
		$sql = "SELECT * FROM article where s_Column='$listid' limit $num,$page_size";	
	};
	$result = $conn->query($sql);
?>
<div class="w1140">
<div class="projects-header page-header">
   <h2><a href="#"><?php echo $listid; ?></a></h2>
</div>
<ul class="list-group">
	<?php
    	if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
	
	?>
  <li class="list-group-item"><a href="http://www.webp.com/doabout.php?showid=<?php echo $row['Id']; ?>" title="<?php echo $row['Title'] ?>"><?php echo mb_substr($row['Title'],0,30,'utf8'); ?></a></li>
  <?php
  			//  mb_substr(要截取的字符串,开始位置（从头开始:0）,截取多少个字（无论汉字、英文字母、符号都算一个字）,编码（选填）)
			//  substr  按字节截取的	
			}
		}
  ?>
</ul>
<!--分页开始-->
<nav aria-label="Page navigation" style="text-align:center;">
  <ul class="pagination">
    <li>   
      <a href="<?php echo $_SERVER['PHP_SELF']; ?>?<?php if($listid!='全部课程'){ echo 'listid='.$_GET['listid'].'&'; } ?>page=<?php if($page<=0){echo 1;}else{echo $page;}; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php
    	for($i=1;$i<=ceil($count/$page_size); $i++){
	?>
    <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?<?php if($listid!='全部课程'){ echo 'listid='.$_GET['listid'].'&'; } ?>page=<?php echo $i; ?>" style="<?php if($page+1==$i){echo 'background:#eaeaea;';} ?>"><?php echo $i; ?></a></li>
    <?php
    	};
	?>
    <li>
      <a href="<?php echo $_SERVER['PHP_SELF']; ?>?<?php if($listid!='全部课程'){ echo 'listid='.$_GET['listid'].'&'; } ?>page=<?php if($page+2>ceil($count/$page_size)){echo ceil($count/$page_size);}else{echo $page+2;}; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
<!--分页结束-->
<?php
	include "footer.php";
?>
