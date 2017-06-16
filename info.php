<?php
	include "header.php";
	include "php/config.php";
	
	$conn = new mysqli($servername,$serveruser,$serverpass,$mydb);
	
	if($conn->connect_error){
		die("链接失败:".$conn->connect_error);
	};
	$web = "SELECT * FROM article where s_Column = 'Web前端开发' limit 0,4";
	$wresult = $conn->query($web);
	
	$ui = "SELECT * FROM article where s_Column = 'UI设计' limit 0,4";
	$uresult = $conn->query($ui);
	
	$php = "SELECT * FROM article where s_Column = 'PHP开发' limit 0,4";
	$presult = $conn->query($php);
	
	$sql = "SELECT * FROM article where s_Column = '网络营销' limit 0,4";
	$qresult = $conn->query($sql);
	
	$java = "SELECT * FROM article where s_Column = 'JAVA开发' limit 0,4";
	$jresult = $conn->query($java);
	
	$jquery = "SELECT * FROM article where s_Column = 'Jquery' limit 0,4";
	$jqresult = $conn->query($jquery);
?>
<div class="w1140" style="margin-top:30px"> 
	<div style="float:left;width:555px;">
	<table class="table table-bordered"> 
        <thead>
          <tr style="background:#dff0d8;color:#3c763d;">
            <td><span class="glyphicon glyphicon-book" aria-hidden="true"></span><a href="http://www.webp.com/doinfo.php?listid=1" style="color:#3c763d;">Web前端开发</a></td>
          </tr>
        </thead>
        <tbody>
          
            <?php
			
            	if($wresult->num_rows>0){
					while($wrow=$wresult->fetch_assoc()){		
			?>
            <tr>
            	<td scope="row"><a href="http://www.webp.com/doabout.php?showid=<?php echo $wrow['Id']; ?>" target="_blank"><?php echo $wrow['Title'];?></a></td>
            </tr>
			<?php
            		};
				};
			?>
          
        </tbody>
	</table>
	<table class="table table-bordered">
        <thead>
          <tr style="background:#ffe380;color:#c17600;">
            <td><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span><a href="http://www.webp.com/doinfo.php?listid=2" style="color:#c17600;">UI设计</a></td>
          </tr>
        </thead>
        <tbody>
        	<?php  
				if($uresult->num_rows>0){
					while($urow=$uresult->fetch_assoc()){	
			?>
            <tr>
            	<td scope="row"><a href="http://www.webp.com/doabout.php?showid=<?php echo $urow['Id']; ?>" target="_blank"><?php echo $urow['Title'];?></a></td>
            </tr>
            <?php
            		};
				};
			?>
        </tbody>
	</table>
    <table class="table table-bordered">
        <thead>
          <tr style="background:#fcf8e3;color:#8a6d3b;">
            <td><span class="glyphicon glyphicon-list" aria-hidden="true"></span><a href="http://www.webp.com/doinfo.php?listid=3" style="color:#8a6d3b;">PHP开发</a></td>
          </tr>
        </thead>
        <tbody>
          <?php  
				if($presult->num_rows>0){
					while($prow=$presult->fetch_assoc()){	
			?>
            <tr>
            	<td scope="row"><a href="http://www.webp.com/doabout.php?showid=<?php echo $prow['Id']; ?>" target="_blank"><?php echo $prow['Title'];?></a></td>
            </tr>
            <?php
            		};
				};
			?>
        </tbody>
	</table>
    </div>
    <div style="float:right;width:555px;">
	<table class="table table-bordered"> 
        <thead>
          <tr style="background:#d9edf7;color:#31708f;">
            <td><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span><a href="http://www.webp.com/doinfo.php?listid=4" style="color:#31708f;">网络营销</a></td>
          </tr>
        </thead>
        <tbody>
          <?php  
				if($qresult->num_rows>0){
					while($qrow=$qresult->fetch_assoc()){	
			?>
            <tr>
            	<td scope="row"><a href="http://www.webp.com/doabout.php?showid=<?php echo $qrow['Id']; ?>" target="_blank"><?php echo $qrow['Title'];?></a></td>
            </tr>
            <?php
            		};
				};
			?>
        </tbody>
	</table>
	<table class="table table-bordered">
        <thead>
          <tr style="background:#337ab7;color:#fff;">
            <td><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><a href="http://www.webp.com/doinfo.php?listid=5" style="color:#fff;">JAVA开发</a></td>
          </tr>
        </thead>
        <tbody>
          <?php  
				if($jresult->num_rows>0){
					while($jrow=$jresult->fetch_assoc()){	
			?>
            <tr>
            	<td scope="row"><a href="http://www.webp.com/doabout.php?showid=<?php echo $jrow['Id']; ?>" target="_blank"><?php echo $jrow['Title'];?></a></td>
            </tr>
            <?php
            		};
				};
			?>
        </tbody>
	</table>
    <table class="table table-bordered">
        <thead>
          <tr style="background:#f2dede;color:#a94442">
            <td><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span><a href="http://www.webp.com/doinfo.php?listid=6" style=";color:#a94442">Jquery</a></td>
          </tr>
        </thead>
        <tbody>
          	<?php  
				if($jqresult->num_rows>0){
					while($jrow=$jqresult->fetch_assoc()){	
			?>
            <tr>
            	<td scope="row"><a href="http://www.webp.com/doabout.php?showid=<?php echo $jrow['Id']; ?>" target="_blank"><?php echo $jrow['Title'];?></a></td>
            </tr>
            <?php
            		};
				};
			?>
        </tbody>
	</table>
    </div>
</div> 
<?php
	include "footer.php";
?>
