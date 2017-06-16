<?php
	session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/public.css"/>
<title>无标题文档</title>
	
</head>
<body>
<div>
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="http://www.webp.com/index.php">首页 <span class="sr-only">(current)</span></a></li>
        <li><a href="http://www.webp.com/info.php">前端资讯</a></li>
        <li><a href="http://www.webp.com/course.php">课程选择</a></li>
        <li><a href="http://www.webp.com/progress.php">课程易学度</a></li>
        <?php
        	if(isset($_SESSION['user']) && $_SESSION['user']!=""){
				echo "<li><a>".$_SESSION['user']."</a></li><li><a href='http://www.webp.com/quit.php'>退出</a></li>";	
			}else{
				echo "<li><a href='http://www.webp.com/login.php'>注册</a></li> <li><a href='http://www.webp.com/logon.php'>登录</a></li>";	
			}
		?>
      </ul>  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="about.php">关于我们</a></li>      
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="container">
  	<div id="carousel-example-generic" class="carousel slide marginTop" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="image/hdp_01.jpg" alt="图1" width="100%">
        </div>
        <div class="item">
          <img src="image/hdp_02.jpg" alt="图2" width="100%">
        </div>
      </div>
    
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
	</div>
</div>