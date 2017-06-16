<?php
	session_start();
	include "hmanual.php";

?>
<body>
	<div class="container">
    	<div class="projects-header page-header">
        	<h2>后台信息系统 <small>欢迎您：
			<?php
        	if(isset($_SESSION['user']) && $_SESSION['user']!=""){
				echo "<a>".$_SESSION['user']."</a><a href='http://www.webp.com/php/insidequit.php'>注销</a>";	
			}else{
				echo "<a href='http://www.webp.com/php/insidelogon.php'>登录</a>";	
			}
			?></small></h2>
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
            <form method="post" action="article.php" enctype="multipart/form-data" id="form" onSubmit="return submitManual()">
            	<div class="form-group">
                    <label for="InputTitle">文章标题</label>
                    <input type="text" class="form-control" id="InputTitle" name="title" placeholder="文章标题">
                  </div>
                <div class="form-group">
                    <label for="column">栏目名称</label>
                    <select class="form-control" name="column">
                      <option>Web前端开发</option>
                      <option>UI设计</option>
                      <option>PHP开发</option>
                      <option>JAVA开发</option>
                      <option>网络营销</option>
                      <option>Jquery</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="describe">文章描述</label>
                    <textarea class="form-control" rows="3" id="describe" name="describe"></textarea>
                  </div>
                <div class="form-group">
                    <label for="keyword">关键词</label>
                    <input type="text" class="form-control" id="keyword" name="keyword" placeholder="关键词">
                  </div>
                  <h5>文章内容</h5>
                 <!--style给定宽度可以影响编辑器的最终宽度-->
				<script type="text/plain" id="myEditor" style="width:100%;height:300px;">
                    <p>请添加文章内容……</p>
                </script>
                <hr>
                <div class="form-group">
                    <label for="InputFile">上传缩略图</label>
                    <input type="file" id="InputFile" name="upfile">
                 </div>
                <input type="submit" class="btn btn-success" value="发布文章"> <input type="reset" class="btn btn-danger" value="重置内容">
                </form>
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
                <script type="text/javascript" src="../js/manual.js"></script>
            </div>
        </div>
        <div class="panel-footer" style="margin-top:50px;">
    		Copyright1999-2016 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP证161188号
    	</div>
    </div>
</body>
</html>