<?php
	include "header.php";
	include "php/config.php";
	$conn = new mysqli($servername,$serveruser,$serverpass,$mydb);
	if($conn->connect_error)
	{
		die("链接数据库失败");
	};
	$sql = "SELECT * FROM article limit 0,8"; 
	$result = $conn->query($sql);
	if($result->num_rows>0)
	{
?>
<div class="w1140" style="margin-top:30px"> 
    <h3>Web<small style="font-size:24px;font-family:宋体">前端课程推荐</small></h3>
	<h6>这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</h6>
<hr/>
    <div class="row">
    <?php
    	while($row=$result->fetch_assoc()){
	?>
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
          <a href="http://www.webp.com/doabout.php?showid=<?php echo $row['Id'] ?>" target="_blank" title="<?php echo $row['Title']; ?>"><img class="lazy" src="<?php echo $row['Thumbnail']; ?>" width="300" style="height:130px;"  data-src="<?php echo $row['Thumbnail']; ?>" alt="<?php echo $row['Title']; ?>"></a>
          <div class="caption">
            <h3 style="color:#338ecf;"><a href="http://www.webp.com/doabout.php?showid=<?php echo $row['Id'] ?>" target="_blank" title="<?php echo $row['Title']; ?>"><?php echo mb_substr($row['Title'],0,8,'utf8'); ?><br><small><?php echo $row['ReleaseDate']; ?></small></a></h3>
            <p><?php echo mb_substr($row['s_Describe'],0,40,'utf8')."..." ; ?></p>
          </div>
        </div>
      </div>
    <?php
		}
	}
	?>
	</div>
    <h3>Web<small style="font-size:24px;font-family:宋体">前端课程选择</small></h3>
	<h6>这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</h6>
    <hr/>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>班级名称</th>
          <th>课时</th>
          <th>价格</th>
          <th>免费试听</th>
          <th>购买课程</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">就业精品班</td>
          <td>4个月</td>
          <td>优惠价17700.00<del>原价18900.00</del></td>
          <td><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>预约</td>
          <td><button type="button" class="btn" style="background:#d9534f;color:#fff;">立即报名</button></td>
        </tr>
        <tr>
          <td scope="row">就业精品班</td>
          <td>4个月</td>
          <td>优惠价17700.00<del>原价18900.00</del></td>
          <td><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>预约</td>
          <td><button type="button" class="btn" style="background:#d9534f;color:#fff;">立即报名</button></td>
        </tr>
        <tr>
          <td scope="row">就业精品班</td>
          <td>4个月</td>
          <td>优惠价17700.00<del>原价18900.00</del></td>
          <td><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>预约</td>
          <td><button type="button" class="btn" style="background:#d9534f;color:#fff;">立即报名</button></td>
        </tr>
      </tbody>
    </table>
</div>
<?php
	include "footer.php";
?>
