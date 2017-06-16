<?php
	include "header.php";
?>
<div class="w1140" style="margin-top:30px"> 
    <div class="dropdown projects-header page-header">
      <select class="form-control" style="width:auto;" onChange="showHint(this.value,0)"><!--onchange事件会在域的内容改变时发生。-->
          <option>全部课程</option>
          <option>Web前端开发</option>
          <option>UI设计</option>
          <option>PHP开发</option>
          <option>网络营销</option>
          <option>JAVA开发</option>
          <option>Jquery</option>
     </select>
    </div>
    <div id="rows">
<!--    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="image/pif01.png" data-holder-rendered="true">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="image/pif02.png" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="image/pif03.png" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="image/pif04.png" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="image/pif04.png" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="image/pif04.png" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="image/pif04.png" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="image/pif04.png" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="image/pif04.png" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="image/pif04.png" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="image/pif04.png" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="image/pif04.png" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="image/pif04.png" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="image/pif04.png" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="image/pif04.png" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img data-src="holder.js/100%x180" alt="100%x180" src="image/pif04.png" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
        </a>
      </div>
    </div>-->
    <!--<nav aria-label="...">
        <ul class="pager">
            <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
            <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
        </ul>
	</nav>
    </div>-->
    </div>
</div>
	<script type="text/javascript" src="js/course.js"></script>
    <script>
    	showHint("全部课程",0);
    </script>
<?php
	include "footer.php";
?>
