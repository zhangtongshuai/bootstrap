<?php
	header('Content-type:text/html;charset=utf-8;');
	include "hmanual.php";
	include "config.php";
	$listid ="";
	$msql = "";
	$page = 0;
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
	};
	
	$conn = new mysqli($servername,$serveruser,$serverpass,$mydb);
	if($conn->connect_error){
		die("链接失败");
	};
	
	$msql = "SELECT * FROM article where s_Column='$listid'";	
	
	$mresult = $conn->query($msql);
	$page_size = 3;
	$count = $mresult->num_rows;
	$num = $page*$page_size;
	
	$sql = "SELECT * FROM article where s_Column='$listid' limit $num,$page_size";	
	$result = $conn->query($sql);
	
?>
<body>
	<div class="container">
    	<div class="projects-header page-header">
        	<h2>后台信息系统 <small>欢迎您：zhou</small></h2>
   		</div>
        <div class="row">
        	<div class="col-md-3">
            	<ul class="list-group">
                  <li class="list-group-item list-group-item-success">文章栏目</li>
                  <li class="list-group-item"><a href="http://www.webp.com/php/domanual.php?listid=1">Web前端开发</a></li>
                  <li class="list-group-item"><a href="http://www.webp.com/php/domanual.php?listid=2">UI设计</a></li>
                  <li class="list-group-item"><a href="http://www.webp.com/php/domanual.php?listid=3">PHP开发</a></li>
                  <li class="list-group-item"><a href="http://www.webp.com/php/domanual.php?listid=4">网络营销</a></li>
                  <li class="list-group-item"><a href="http://www.webp.com/php/domanual.php?listid=5">JAVA开发</a></li>
                  <li class="list-group-item"><a href="http://www.webp.com/php/domanual.php?listid=6">Jquery</a></li>
                  <li class="list-group-item list-group-item-success"><a href="http://www.webp.com/php/manual.php?listid=0">发布文章</a></li>
                </ul>
            </div>
            <div class="col-md-9" style="border-left:1px solid #eaeaea;">
                <table>
                    <tr>
                        <th>id</th>
                        <th>标题</th>
                        <th>发布日期</th>
                        <th>操作</th>
                    </tr>
                    <?php
    					if($result->num_rows > 0){
							while($row = $result->fetch_assoc()){
	
					?>
  						<tr>
                        	<td><?php echo $row['Id'];?></td>
                            <td><?php echo mb_substr($row['Title'],0,30,'utf8'); ?></td>
                            <td><?php echo $row['ReleaseDate'];?></td>
                            <td><a href="delmanual.php?id=<?php echo $row['Id']; ?>">删除</a>&nbsp;<a href="updArticle.php?id=<?php echo $row['Id']; ?>">修改</a></td>
                        </tr>
  					<?php	
							}
						}
  					?>
                    </table>
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
                    <!--分页结束-->
                <script type="text/javascript">
                    //实例化编辑器
                    var um = UM.getEditor('myEditor');
                    um.addListener('blur',function(){
                        $('#focush2').html('编辑器失去焦点了')
                    });
                    um.addListener('focus',function(){
                        $('#focush2').html('')
                    });
                    
                </script>
            </div>
        </div>
        <div class="panel-footer" style="margin-top:50px;">
    		Copyright1999-2016 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP证161188号
    	</div>
    </div>
</body>
</html>